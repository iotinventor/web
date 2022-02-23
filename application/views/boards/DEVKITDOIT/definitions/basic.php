<script>
Blockly.Blocks['on_start'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on start");
    this.appendStatementInput("statements")
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
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['add_icon_to_screen'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("add ")
        .appendField(new Blockly.FieldDropdown(
          [
            ["heart","heart"],
            ["yes","yes"],
            ["no","no"],
            ["happy","happy"],
            ["sad","sad"],
            ["confused","confused"],
          ]), "icon")
        .appendField("icon to screen");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['add_to_screen'] = {
  init: function() {
    this.appendValueInput("text")
        .setCheck(["String", "Number"])
        .appendField("add ");
    this.appendValueInput("x")
        .setCheck("Number")
        .appendField("position at x");
    this.appendValueInput("y")
        .setCheck("Number")
        .appendField("y");
    this.appendDummyInput()
        .appendField("size")
        .appendField(new Blockly.FieldDropdown([["small", "1"], ["medium", "2"], ["big", "3"]]), "size")
        .appendField("to screen");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['show_screen'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("show screen");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['clear_screen'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("clear screen");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pause'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pause")
        .appendField(new Blockly.FieldDropdown([["15 ms","15"], ["100 ms","100"], ["200 ms","200"], ["500 ms","500"], ["1 second","1000"], ["2 seconds","2000"], ["5 seconds","5000"]]), "time");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['add_arrow_to_screen'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("add arrow")
        .appendField(new Blockly.FieldDropdown([["up","arrow_up"], ["down","arrow_down"], ["right","arrow_right"], ["left","arrow_left"]]), "arrow")
        .appendField("to screen");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(260);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>