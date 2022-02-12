<script>
Blockly.Blocks['oled_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display.begin");
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
        .appendField("display.clearDisplay");
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
        .appendField("display.setTextSize");
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
        .appendField("display.setTextColor")
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
        .appendField("display.setCursor");
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
        .appendField("display.println");
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
        .appendField("display.display");
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
        .appendField("display.startscrollright");
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
        .appendField("display.startscrollleft");
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
        .appendField("diplay.startscrolldiagright");
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
        .appendField("display.startscrolldiagleft");
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
        .appendField("display.stopscroll");
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
        .appendField("display.print");
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
        .appendField("display.cp437")
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