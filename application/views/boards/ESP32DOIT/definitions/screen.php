<script>
Blockly.Blocks['oled_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display begin");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_clear'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display clear");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_text_size'] = {
  init: function() {
    this.appendValueInput("NAME")
        .setCheck("Number")
        .appendField("display set text size");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_text_color'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display set text color")
        .appendField(new Blockly.FieldDropdown([["WHITE","WHITE"], ["BLUE","BLUE"], ["YELLOW","YELLOW"]]), "color");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_cursor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display set cursor");
    this.appendValueInput("x")
        .setCheck("Number")
        .appendField("x");
    this.appendValueInput("y")
        .setCheck("Number")
        .appendField("y");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_println'] = {
  init: function() {
    this.appendValueInput("NAME")
        .setCheck(null)
        .appendField("display println");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_display'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display screen");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_scroll_right'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display start scroll right");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_scroll_left'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display start scroll left");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_scroll_diagonal_right'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("diplay start scroll diagonal right");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_scroll_diagonal_left'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display start scroll diagonal left");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_stop_scroll'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display stop scroll");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_print'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("display print");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['oled_cp437'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display cp437")
        .appendField(new Blockly.FieldCheckbox("TRUE"), "bool");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>