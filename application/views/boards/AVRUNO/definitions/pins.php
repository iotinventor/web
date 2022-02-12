<script>

Blockly.Blocks['pin_input'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("input")
        .appendField(new Blockly.FieldDropdown(
          [
            ["1","1"], 
            ["2","2"], 
            ["3","3"],
            ["4","4"],
            ["5","5"],
            ["6","6"],
            ["7","7"],
            ["8","8"],
            ["9","9"],
            ["9","9"],
            ["10","10"],
            ["11","11"],
            ["12","12"],
            ["13","13"],
          ]
        ), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_output'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("output")
        .appendField(new Blockly.FieldDropdown(
          [
            ["1","1"], 
            ["2","2"], 
            ["3","3"],
            ["4","4"],
            ["5","5"],
            ["6","6"],
            ["7","7"],
            ["8","8"],
            ["9","9"],
            ["9","9"],
            ["10","10"],
            ["11","11"],
            ["12","12"],
            ["13","13"],
          ]
        ), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_pwm'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pwm (~)")
        .appendField(new Blockly.FieldDropdown(
          [
            ["3","3"], 
            ["5","5"], 
            ["6","6"], 
            ["9","9"], 
            ["10","10"], 
            ["11","11"]
          ]
        ), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_analog'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("analog")
        .appendField(new Blockly.FieldDropdown(
          [
            ["A0","A0"], 
            ["A1","A1"], 
            ["A2","A2"], 
            ["A3","A3"], 
            ["A4","A4"], 
            ["A5","A5"]
          ]), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_spi'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("spi")
        .appendField(new Blockly.FieldDropdown(
          [
            ["10 (SS)","10"], 
            ["11 (MOSI)","11"], 
            ["12 (MISO)","12"], 
            ["13 (SCK)","13"]
          ]), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_i2c'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("i2c")
        .appendField(new Blockly.FieldDropdown(
          [
            ["A4 (SDA)","A4"], 
            ["A5 (SCA)","A5"]
          ]), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_led_builtin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("led builtin");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['state'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldDropdown([["HIGH","HIGH"], ["LOW","LOW"]]), "state");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>