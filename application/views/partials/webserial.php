<script>
if ("serial" in navigator) {
  var selectBaudRate = document.getElementById("selectBaudRate");
  var textareaTerminal = document.getElementById("textareaTerminal");
  textareaTerminal.value = "";
  document.getElementById('openSerial').addEventListener('click', async () => {
    // Prompt user to select any serial port.
    const port = await navigator.serial.requestPort();

    // Wait for the serial port to open.
    await port.open({ baudRate: selectBaudRate.value });


    while (port.readable) {

      try {
        const textDecoder = new TextDecoderStream();
        const readableStreamClosed = port.readable.pipeTo(textDecoder.writable);
        const reader = textDecoder.readable.getReader();
        while (true) {
          const { value, done } = await reader.read();
          if (done) {
            // Allow the serial port to be closed later.
            reader.releaseLock();
            break;
          }
          if (value) {
            textareaTerminal.scrollTop = textareaTerminal.scrollHeight;
            textareaTerminal.value += value;
          }
        }

        const textEncoder = new TextEncoderStream();
        const writableStreamClosed = textEncoder.readable.pipeTo(port.writable);

        reader.cancel();
        await readableStreamClosed.catch(() => { /* Ignore the error */ });

        writer.close();
        await writableStreamClosed;

        await port.close();
      } catch (error) {
      // TODO: Handle non-fatal read error.
      }
  }


  });
}
</script>