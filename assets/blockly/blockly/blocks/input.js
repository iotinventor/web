Blockly.Blocks['input_pin_touch'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/google/noto-emoji-people-bodyparts/128/11953-backhand-index-pointing-down-light-skin-tone-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("on")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_TOUCH), "pin");
    this.appendStatementInput("true")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("is touch");
    this.appendStatementInput("false")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("is release");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(345);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['input_pin_button'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/google/noto-emoji-objects/128/62833-trackball-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("on button")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_INPUT), "pin");
    this.appendStatementInput("true")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("is click");
    this.appendStatementInput("false")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("is release");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(345);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};