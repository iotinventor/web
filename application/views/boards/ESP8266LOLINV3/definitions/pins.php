<script>

Blockly.Blocks['pin_input'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("input")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D1 GPIO5","5"], 
            ["D2 GPIO4","4"], 
            ["D5 GPI014","14"],
            ["D6 GPI012","12"],
            ["D7 GPI013","13"],
            ["RX GPI03","3"],
          ]), "pin");
    this.setOutput(true, null);
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
          ]), "pin");
    this.setOutput(true, null);
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
            ["D1 GPIO5","5"], 
            ["D2 GPIO4","4"], 
            ["D3 GPIO0","0"], 
            ["D4 GPIO2","2"], 
            ["D5 GPI014","14"],
            ["D6 GPI012","12"],
            ["D7 GPI013","13"],
            ["D8 GPI015","15"],
            ["TX GPI01","1"],
          ]), "pin");
    this.setOutput(true, null);
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
            ["D1 GPIO5","5"], 
            ["D2 GPIO4","4"], 
            ["D3 GPIO0","0"], 
            ["D4 GPIO2","2"], 
            ["D5 GPI014","14"],
            ["D6 GPI012","12"],
            ["D7 GPI013","13"],
            ["D8 GPI015","15"],
            ["RX GPI03","3"],
            ["TX GPI01","1"],
          ]), "pin");
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_spi'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("SPI")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D6 GPI012 MISO","12"],
            ["D7 GPI013 MOSI","13"],
            ["D5 GPI014 SCLK","14"],
            ["D8 GPI015 CS","15"],
          ]), "pin");
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_i2c'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("I2C")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D1 GPIO5 SCL","5"], 
            ["D2 GPIO4 SDA","4"]
          ]), "pin");
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_led_builtin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("LED_BUILTIN");
    this.setOutput(true, null);
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