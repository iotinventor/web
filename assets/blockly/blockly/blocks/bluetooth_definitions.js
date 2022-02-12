Blockly.Blocks['call_bluetooth_serial'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call BluetoothSerial")
        .appendField(new Blockly.FieldTextInput("MyBluetooth"), "name");
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_bluetooth_serial_write'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call BluetoothSerial.write");
    this.appendValueInput("NAME")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("number");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_bluetoothserial_available'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call BluetoothSerial.available");
    this.setOutput(true, ["Boolean", "Number"]);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_bluetoothserial_read'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call BluetoothSerial.read");
    this.setOutput(true, "Number");
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['get_character'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get character")
        .appendField(new Blockly.FieldDropdown([["A","A"], ["B","B"], ["C","C"]]), "char");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['get_number'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get number")
        .appendField(new Blockly.FieldDropdown([["0","0"], ["1","1"], ["9","9"]]), "number");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};