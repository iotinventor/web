Blockly.Blocks['led_turn_led'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("turn led")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_OUTPUT), "pin")
        .appendField("to")
        .appendField(new Blockly.FieldDropdown([["ON","HIGH"], ["OFF","LOW"]]), "state");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['led_turn_setup_brigntness'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("setup led with brightness")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_OUTPUT), "pin");
    this.setInputsInline(true);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['led_turn_led_brightness'] = {
  init: function() {
    this.appendValueInput("brightness")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("set brightness");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};