Blockly.Blocks['call_digital_write'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call digitalWrite");
    this.appendValueInput("pin")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("pin");
    this.appendValueInput("state")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("state");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['get_esp32_pin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get ESP32 pin")
        .appendField(new Blockly.FieldDropdown([["GPIO1","1"], ["GPIO2","2"], ["GPIO3","3"]]), "pin");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_digital_read'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call digitalRead");
    this.appendValueInput("pin")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("pin");
    this.setOutput(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['get_io'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get IO")
        .appendField(new Blockly.FieldDropdown([["INPUT","INPUT"], ["OUTPUT","OUTPUT"]]), "io");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['get_channel'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get channel")
        .appendField(new Blockly.FieldDropdown([["0","0"], ["15","15"]]), "channel");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_ledcsetup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call ledcSetup");
    this.appendValueInput("channel")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("channel");
    this.appendValueInput("frequency")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("frequency");
    this.appendValueInput("resolution")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("resolution");
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_ledcattachpin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call ledcAttachPin");
    this.appendValueInput("pin")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("pin");
    this.appendValueInput("channel")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("channel");
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_ledcwrite'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call ledcWrite");
    this.appendValueInput("channel")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("channel");
    this.appendValueInput("dutyCycle")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("dutyCycle");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['call_analogread'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("call analogRead");
    this.appendValueInput("pin")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("pin");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['get_resolution'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("get resolution")
        .appendField(new Blockly.FieldDropdown([["1 bit","1"], ["2 bits","2"], ["16 bits","16"]]), "resoultion");
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};