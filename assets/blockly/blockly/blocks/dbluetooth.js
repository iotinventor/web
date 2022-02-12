Blockly.Blocks['bluetooth_set_name'] = {
  init: function() {
    this.appendValueInput("name")
        .setCheck("String")
        .appendField("bluetooth set name");
    this.setInputsInline(true);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['bluetooth_received_string'] = {
  init: function() {
    this.appendValueInput("string")
        .setCheck("String")
        .appendField("on bluetooth received string");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setInputsInline(true);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['bluetooth_send_string'] = {
  init: function() {
    this.appendValueInput("string")
        .setCheck("String")
        .appendField("bluetooth send string");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};




Blockly.Blocks['bluetooth_received_number'] = {
  init: function() {
    this.appendValueInput("string")
        .setCheck("Number")
        .appendField("on bluetooth received number");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setInputsInline(true);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['bluetooth_send_number'] = {
  init: function() {
    this.appendValueInput("number")
        .setCheck("Number")
        .appendField("bluetooth send number");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_set_wifi_ssid_password'] = {
  init: function() {
    this.appendValueInput("ssid")
        .setCheck(null)
        .appendField("set wifi");
    this.appendValueInput("password")
        .setCheck(null)
        .appendField("&");
    this.setInputsInline(true);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_on_connected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on wifi client connected");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setInputsInline(true);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_is_path_called'] = {
  init: function() {
    this.appendValueInput("path")
        .setCheck("String")
        .appendField("is");
    this.appendDummyInput()
        .appendField("called");
    this.setInputsInline(true);
    this.setOutput(true, ["Number", "Boolean"]);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_send_value'] = {
  init: function() {
    this.appendValueInput("path")
        .setCheck(["Number", "String"])
        .appendField("wifi send value");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};