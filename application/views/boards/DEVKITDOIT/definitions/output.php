<script>

Blockly.Blocks['play_note'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("play note")
        .appendField(new Blockly.FieldDropdown([["do","262"], ["re","294"], ["mi","330"], ["fa","349"], ["sol","395"], ["la","440"], ["si","494"], ["do''","523"]]), "note")
        .appendField("duration")
        .appendField(new Blockly.FieldDropdown([["fast","100"], ["normal","500"], ["long","1000"], ["very long","2500"]]), "duration");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['stop_note'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("stop note");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['play_beep'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("play beep");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['stop_beep'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("stop beep");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['turn_on_lamp'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("turn on lamp");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['turn_off_lamp'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("turn off lamp");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['lamp'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("lamp")
        .appendField(new Blockly.FieldDropdown([["low","0"], ["medium","50"], ["high","100"], ["very high","150"]]), "brightness");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


</script>