<script>

Blockly.Blocks['pin_input'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("input")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D2","2"], 
            ["D3","3"], 
            ["D4","4"],
            ["D5","5"],
            ["D12","12"],
            ["D13","13"],
            ["D14","14"],
            ["D15","15"],
            ["D16","16"],
            ["D17","17"],
            ["D18","18"],
            ["D19","19"],
            ["D21","21"],
            ["D22","22"],
            ["D23","23"],
            ["D25","25"],
            ["D26","26"],
            ["D27","27"],
            ["D32","32"],
            ["D33","33"],
            ["D34","34"],
            ["D35","35"],
            ["D36","36"],
            ["D39","39"],
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
            ["D2","2"], 
            ["D3","3"], 
            ["D4","4"],
            ["D5","5"],
            ["D12","12"],
            ["D13","13"],
            ["D14","14"],
            ["D15","15"],
            ["D16","16"],
            ["D17","17"],
            ["D18","18"],
            ["D19","19"],
            ["D21","21"],
            ["D22","22"],
            ["D23","23"],
            ["D25","25"],
            ["D26","26"],
            ["D27","27"],
            ["D32","32"],
            ["D33","33"]
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
            ["D2","2"], 
            ["D3","3"], 
            ["D4","4"],
            ["D5","5"],
            ["D12","12"],
            ["D13","13"],
            ["D14","14"],
            ["D15","15"],
            ["D16","16"],
            ["D17","17"],
            ["D18","18"],
            ["D19","19"],
            ["D21","21"],
            ["D22","22"],
            ["D23","23"],
            ["D25","25"],
            ["D26","26"],
            ["D27","27"],
            ["D32","32"],
            ["D33","33"]
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
            ["D0 (ADC2)","0"], 
            ["D2 (ADC2)","2"], 
            ["D12 (ADC2)","12"],
            ["D13 (ADC2)","13"],
            ["D14 (ADC2)","14"],
            ["D15 (ADC2)","15"],
            ["D25 (ADC2)","25"],
            ["D26 (ADC2)","26"],
            ["D27 (ADC2)","27"],
            ["D32 (ADC1)","32"],
            ["D33 (ADC1)","33"],
            ["D34 (ADC1)","34"],
            ["D35 (ADC1)","35"],
            ["D36 (ADC1)","36"],
            ["D37 (ADC1)","37"],
            ["D38 (ADC1)","38"],
            ["D39 (ADC1)","39"],
          ]
          ), "pins");
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
            ["D5 (VSPI/CS)","5"],
            ["D18 (VSPI/CLK)","18"],
            ["D19 (VSPI/MISO)","19"],
            ["D23 (VSPI/MOSI)","23"],
            ["D12 (HSPI/MISO)","12"],
            ["D13 (HSPI/MOSI)","13"],
            ["D14 (HSPI/CLK)","14"],
            ["D15 (HSPI/CS)","15"],
          ]
          ), "pins");
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
            ["D21 (SDA)","21"], 
            ["D22 (SCL)","22"]
          ]), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['pin_touch'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("touch")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D4 (T0)","4"],
            ["D0 (T1)","0"], 
            ["D2 (T2)","2"], 
            ["D15 (T3)","15"],
            ["D13 (T4)","13"],
            ["D12 (T5)","12"],
            ["D14 (T6)","14"],
            ["D27 (T7)","27"],
            ["D33 (T8)","33"],
            ["D32 (T9)","32"],
          ]
        ), "pins");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['pin_dac'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("dac")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D25 (DAC1)","25"],
            ["D26 (DAC2)","26"],
          ]
        ), "pins");
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


Blockly.Blocks['pin_rtc'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("input")
        .appendField(new Blockly.FieldDropdown(
          [
            ["D36 (RTC_GPIO0)","36"],
            ["D39 (RTC_GPIO3)","39"],
            ["D34 (RTC_GPIO4)","34"],
            ["D35 (RTC_GPIO5)","35"],
            ["D25 (RTC_GPIO6)","25"],
            ["D26 (RTC_GPIO7)","26"],
            ["D33 (RTC_GPIO8)","33"],
            ["D32 (RTC_GPIO9)","32"],
            ["D4 (RTC_GPIO10)","4"],
            ["D0 (RTC_GPIO11)","0"],
            ["D2 (RTC_GPIO12)","2"], 
            ["D15 (RTC_GPIO13)","15"],
            ["D13 (RTC_GPIO14)","13"],
            ["D12 (RTC_GPIO15)","12"],
            ["D14 (RTC_GPIO16)","14"],
            ["D27 (RTC_GPIO17)","27"],
          ]
        ), "pins");
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