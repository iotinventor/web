<script>
Blockly.Blocks['wifi_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("WiFi.begin")
        .appendField(new Blockly.FieldTextInput("ssid"), "ssid")
        .appendField(new Blockly.FieldTextInput("password"), "password");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_mode'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("WiFi.mode")
        .appendField(new Blockly.FieldDropdown([["Station","WIFI_STA"], ["Access Point","WIFI_AP"]]), "mode");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_status'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("WiFi.status");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_local_ip'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("WiFi.localIP");
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_wl_connected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("WL_CONNECTED");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_on'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server.on")
        .appendField(new Blockly.FieldTextInput("/path"), "path")
        .appendField(new Blockly.FieldDropdown([["method GET","HTTP_GET"], ["method POST","HTTP_POST"]]), "method");
    this.appendValueInput("handlers")
        .setCheck("Function")
        .appendField("handler");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_send'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck("String")
        .appendField("server.send")
        .appendField(new Blockly.FieldDropdown([["200 Ok","200"], ["400 Bad Request","400"], ["404 Not Found","404"]]), "status code")
        .appendField("data");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_has_argument'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server.has")
        .appendField(new Blockly.FieldTextInput("argument"), "arg");
    this.setInputsInline(true);
    this.setOutput(true, "Boolean");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_argument'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server.arg")
        .appendField(new Blockly.FieldTextInput("argument"), "arg");
    this.setInputsInline(true);
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_handle_client'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server.handleClient");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_argument_to_int'] = {
  init: function() {
    this.appendValueInput("argument")
        .setCheck("String")
        .appendField("");
    this.appendDummyInput()
        .appendField("to_int");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['server_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("server.begin");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>