Blockly.Blocks['servo_set_pin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("servo set pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_OUTPUT), "pin");
    this.appendValueInput("degree")
        .setCheck("Number")
        .appendField("degree");
    this.setInputsInline(true);
    this.setColour(20);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['servo_turn_by'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("turn servo")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN_OUTPUT), "pin");
    this.appendValueInput("degree")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("by");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};