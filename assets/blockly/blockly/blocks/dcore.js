Blockly.Blocks['setup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("setup");
    this.appendStatementInput("setups")
        .setCheck(null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['forever'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("forever");
    this.appendStatementInput("forevers")
        .setCheck(null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['core_digital_write'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("digital write pin");
    this.appendValueInput("state")
        .setCheck("Number")
        .appendField("state");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['core_digital_read'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("digital read pin");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['core_pwm_setup'] = {
  init: function() {
    this.appendValueInput("channel")
        .setCheck("Number")
        .appendField("pwm setup channel");
    this.appendValueInput("frequency")
        .setCheck("Number")
        .appendField("frequency");
    this.appendValueInput("resolution")
        .setCheck("Number")
        .appendField("resolution");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['core_pwm_attach_pin'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("pwm attach pin");
    this.appendValueInput("channel")
        .setCheck("Number")
        .appendField("channel");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['core_pwm_write'] = {
  init: function() {
    this.appendValueInput("channel")
        .setCheck("Number")
        .appendField("pwm write channel");
    this.appendValueInput("dutyCycles")
        .setCheck("Number")
        .appendField("dutycycles");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['core_analog_read'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("analog read pin");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['core_state'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldDropdown([["HIGH","HIGH"], ["LOW","LOW"]]), "state");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['core_pin_mode'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("pin");
    this.appendDummyInput()
        .appendField("mode")
        .appendField(new Blockly.FieldDropdown([["INPUT","INPUT"], ["OUTPUT","OUTPUT"]]), "NAME");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['core_millis_interval'] = {
  init: function() {
    this.appendValueInput("interval")
        .setCheck("Number")
        .appendField("start millis interval");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(65);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};