
var blocklyArea = document.getElementById("blocklyArea");
var blocklyDiv = document.getElementById("blocklyDiv");


var blocklyWorkspace = Blockly.inject(
  'blocklyDiv', {
    media: 'https://blockly-demo.appspot.com/static/media/',
    toolbox: document.getElementById("toolbox"),
    scroll: true,
    // renderer: 'custom_renderer',
    grid:
         {spacing: 12,
          length: 1,
          colour: '#293B5F',
          snap: true},
          zoom:
          {controls: true,
           wheel: true,
           startScale: 1.0,
           maxScale: 3,
           minScale: 0.3,
           scaleSpeed: 1.2,
           pinch: true},
     trashcan: true,
  }
);


var onresize = function(e) {
  var element = blocklyArea;
  var x = 0;
  var y = 0;
  do {
    x += element.offsetLeft;
    y += element.offsetTop;
    element = element.offsetParent;
  } while (element);
  blocklyDiv.style.left = x + 'px';
  blocklyDiv.style.top = y + 'px';
  blocklyDiv.style.width = blocklyArea.offsetWidth + 'px';
  blocklyDiv.style.height = blocklyArea.offsetHeight + 'px';
  Blockly.svgResize(blocklyWorkspace);
};

window.addEventListener('resize', onresize, false);
onresize();

Blockly.svgResize(blocklyWorkspace);


blocklyWorkspace.addChangeListener(function (event) {  
  var code = Blockly.Arduino.workspaceToCode(blocklyWorkspace);
  var xml = Blockly.Xml.workspaceToDom(blocklyWorkspace);
  var xml_text = Blockly.Xml.domToText(xml);
  localStorage.setItem("code", xml_text);
  console.log(code);
});

window.onload = function () {
  var xml_text = localStorage.getItem("code");
  if (xml_text) {
    var xml = Blockly.Xml.textToDom(xml_text);
    Blockly.Xml.domToWorkspace(blocklyWorkspace, xml);
  }
  
}

/**
 * Socket on receiver
 */
socket.on("join_success", function (data) {
  localStorage.setItem("pc_id", data.content)
  localStorage.setItem("room", data.room);
  alert("Success joining with pc with room " + data.room );
});

socket.on("leave", function (data) {
  var pcId = localStorage.getItem("pc_id");
  console.log(data);
  if (pcId === data.content) {
    localStorage.setItem("room", "");
    localStorage.setItem("pc_id", "");
    alert("Your pc not connected!");
  }
});


socket.on("console", function (data) {
  textareaTerminal.value += data.content;
});


/**
 * QRCode Scanner
 */
 function qrReader() {
  var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: 250 });
        
  function onScanSuccess(decodedText, decodedResult) {
    divQRCodeResult.innerHTML = "";
    console.log(`Scan result: ${decodedText}`, decodedResult);
    localStorage.setItem("room", decodedText);
    divQRCodeResult.innerHTML = `
    <p class="fs-5">use <strong class="text-primary">${decodedText}</strong> to connect your PC!</p>
    `;
    socket.emit("join_web", {room: decodedText, content: ""});
    html5QrcodeScanner.clear();
  }
  
  html5QrcodeScanner.render(onScanSuccess);
}

btnModalQRCodeReader.addEventListener("click", function () {
  qrReader();
});

/**
 * Run code
 */
btnRun.addEventListener("click", function () {
  var room = localStorage.getItem("room");

  if (room) {
    var code = Blockly.Arduino.workspaceToCode(blocklyWorkspace);
    socket.emit("run", {room: room, content: code});
    modalConsole.show();
    textareaTerminal.value = "Compiling your machine...\n";
  } else {
    alert("Your pc is not connected! Please connect again..");
  }
  
});


btnGetPorts.addEventListener("click", function () {
  if (localStorage.getItem("room")) {
    socket.emit('get_ports', {room: localStorage.getItem("room"), content: null});
    modalConsole.show();
    textareaTerminal.value = "Getting port...\n";
  } else {
    alert("Your pc is not connected! Please connect again..");
  }
});