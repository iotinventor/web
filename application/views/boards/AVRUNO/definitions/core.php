<script>

Blockly.Blocks['setup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("setup");
    this.appendStatementInput("setup")
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
    this.appendStatementInput("forever")
        .setCheck(null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['digital_write'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("digital write pin");
    this.appendValueInput("state")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("state");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['digital_read'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("digital read pin");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['serial_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial begin")
        .appendField(new Blockly.FieldDropdown([["9600","9600"], ["115200","115200"]]), "baud");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['serial_println'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("serial println");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['serial_print'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("serial print");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['serial_available'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial available");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['serial_read'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial read");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['analog_write'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("analog write pin");
    this.appendValueInput("data")
        .setCheck("Number")
        .appendField("data");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['digital_read'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("digital read");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['pulse_in'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("pulse in");
    this.appendValueInput("state")
        .setCheck("Number")
        .appendField("state");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['isnan'] = {
  init: function() {
    this.appendValueInput("value")
        .setCheck("Boolean")
        .appendField("is nan");
    this.setInputsInline(true);
    this.setOutput(true, "Boolean");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['return_nan'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("return");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['analog_read'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("analog read");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['use_millis'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("use millis() with interval")
        .appendField(new Blockly.FieldTextInput("1000"), "1000")
        .appendField("ms");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(20);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

</script>