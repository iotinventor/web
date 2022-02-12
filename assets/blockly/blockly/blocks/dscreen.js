Blockly.Blocks['screen_setup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("screen setup");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_cleardisplay'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("screen clear");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_settextsize'] = {
  init: function() {
    this.appendValueInput("size")
        .setCheck("Number")
        .appendField("set text size");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_settextcolor'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("set text color")
        .appendField(new Blockly.FieldDropdown([["WHITE","WHITE"], ["YELLOW","YELLOW"], ["BLUE","BLUE"]]), "color");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_settextcursor'] = {
  init: function() {
    this.appendValueInput("x")
        .setCheck("Number")
        .appendField("set text cursor (x)");
    this.appendValueInput("y")
        .setCheck("Number")
        .appendField("(y)");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_println'] = {
  init: function() {
    this.appendValueInput("value")
        .setCheck(["String", "Number"])
        .appendField("print line");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_print'] = {
  init: function() {
    this.appendValueInput("value")
        .setCheck(["String", "Number"])
        .appendField("print");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['screen_display'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};