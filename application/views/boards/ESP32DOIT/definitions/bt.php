<script>

Blockly.Blocks['bluetooth_begin'] = {
  init: function() {
    this.appendValueInput("name")
        .setCheck("String")
        .appendField("serial bluetooth begin");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_available'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial bluetooth available");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_read'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial bluetooth read number");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_write'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck("Number")
        .appendField("serial bluetooth write");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_println'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("serial bluetooth println");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bt_allow_accept_string'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial bluetooth allow string");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['bluetooth_read_string'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("serial bluetooth read string");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>