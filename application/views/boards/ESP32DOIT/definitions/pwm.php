<script>
Blockly.Blocks['ledcsetup'] = {
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
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ledcattachpin'] = {
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
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ledcwrite'] = {
  init: function() {
    this.appendValueInput("channel")
        .setCheck("Number")
        .appendField("pwm write channel");
    this.appendValueInput("duty cycle")
        .setCheck("Number")
        .appendField("dutycycle");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>