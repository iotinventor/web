Blockly.Blocks['input_pin_pressed'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_INPUT), "pin")
        .appendField("pressed");
    this.appendStatementInput("do")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("do");
    this.appendStatementInput("released")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("release");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_pin_touched'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_TOUCH), "pin")
        .appendField("touched");
    this.appendStatementInput("do")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("do");
    this.appendStatementInput("released")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("release");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_pin_is_pressed'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_INPUT), "pin")
        .appendField("is pressed");
    this.setOutput(true, "Boolean");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_pin_is_touched'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_TOUCH), "pin")
        .appendField("is touched");
    this.setOutput(true, "Boolean");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_dht11_temperature'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("temperature (°C)");
    this.setOutput(true, "Number");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_dht11_humidity'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("humidity (%)");
    this.setOutput(true, "Number");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};