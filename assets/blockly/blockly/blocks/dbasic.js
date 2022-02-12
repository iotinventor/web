Blockly.Blocks['basic_show_screen'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("show screen");
    this.appendDummyInput()
        .appendField("size")
        .appendField(new Blockly.FieldDropdown([["normal","1"], ["bigger","2"], ["extra big","3"]]), "fontsize");
    this.appendValueInput("x")
        .setCheck("Number")
        .appendField("x position");
    this.appendValueInput("y")
        .setCheck("Number")
        .appendField("y position");
    this.setInputsInline(true);
    this.setPreviousStatement(true, 'display_setup');
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
//  console.log(this);
  }
  
};

Blockly.Blocks['basic_show_animation_screen'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("show animation screen");
    this.appendDummyInput()
        .appendField("size")
        .appendField(new Blockly.FieldDropdown([["normal","1"], ["bigger","2"], ["extra big","3"]]), "fontsize");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['basic_pause'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pause");
    this.appendValueInput("time")
        .setCheck(null);
    this.appendDummyInput()
        .appendField("ms");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['basic_show_icon'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("show icon")
        .appendField(new Blockly.FieldDropdown([["cats","cats"], ["cookies","cookies"]]), "icon")
        .appendField("as start screen")
        .appendField(new Blockly.FieldCheckbox("TRUE"), "flash");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['basic_show_screens'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("show screens");
    this.appendStatementInput("codes")
        .setCheck("basic_show_screens_statements");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['basic_show_screens_statements'] = {
  init: function() {
    this.appendValueInput("data")
        .setCheck(null)
        .appendField("show");
    this.appendDummyInput()
        .appendField("continue text with size")
        .appendField(new Blockly.FieldDropdown([["normal","1"], ["bigger","2"], ["extra big","3"]]), "fontsize");
    this.appendValueInput("x")
        .setCheck("Number")
        .appendField("x position");
    this.appendValueInput("y")
        .setCheck("Number")
        .appendField("y position");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['display_setup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("display setup");
    this.appendStatementInput("NAME")
        .setCheck(null);
    this.setColour(230);
    // this.setDeletable(false);
    // this.setMovable(false);
    // this.setEditable(false);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};