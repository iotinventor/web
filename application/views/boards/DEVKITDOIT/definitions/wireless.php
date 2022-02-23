<script>
Blockly.Blocks['bluetooth_set_name'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("bluetooth set name")
        .appendField(new Blockly.FieldTextInput("Home Automation"), "bluetooth name");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['on_bluetooth_is_available'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on bluetooth is available");
    this.appendStatementInput("statements")
        .setCheck("Bluetooth");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['bluetooth_send'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("bluetooth send");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['bluetooth_received'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("bluetooth received")
        .appendField(new Blockly.FieldTextInput("text"), "key");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_set_ssid_password'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi set ssid")
        .appendField(new Blockly.FieldTextInput("ssid"), "ssid")
        .appendField("password")
        .appendField(new Blockly.FieldTextInput("password"), "password");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_wifi_try_to_connect'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on wifi try to connect");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['on_wifi_is_connected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on wifi is connected");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['local_ip'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("local ip");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['wifi_still_connected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi still connected");
    this.setOutput(true, "Boolean");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_server_called'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on server called")
        .appendField(new Blockly.FieldTextInput("path"), "path");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['server_has'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server has")
        .appendField(new Blockly.FieldTextInput("param"), "param");
    this.setOutput(true, 'Boolean');
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['server_get'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server get")
        .appendField(new Blockly.FieldTextInput("param"), "param")
        .appendField(new Blockly.FieldDropdown([["to string","value()"], ["to number","value()->toInt()"]]), "convert");
    this.setOutput(true, ["String", "Number"]);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['server_send'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck("String")
        .appendField("server send");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

</script>