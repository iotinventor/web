<script>
Blockly.Blocks['on_button_pressed'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on button")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.input), "pin")
        .appendField("pressed");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_pin_touch_down'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on pin")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.touch), "pin")
        .appendField("touch down");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['button_is_pressed'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("button")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.input), "pin")
        .appendField("is pressed");
    this.setOutput(true, "Boolean");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['pin_is_touched'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("pin")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.touch), "pin")
        .appendField("is touched");
    this.setOutput(true, "Boolean");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['temperature_c'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("temperature (°C)");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['humidity'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("humidity (%)");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_button_released'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on button")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.input), "pin")
        .appendField("released");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_pin_touch_up'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on pin")
        .appendField(new Blockly.FieldDropdown(DEVKITDOITPIN.touch), "pin")
        .appendField("touch up");
    this.appendStatementInput("statements")
        .setCheck(null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['soil_moisture'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("soil moisture (%)");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['distance'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("distance (cm)");
    this.setOutput(true, "Number");
    this.setColour(160);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['on_motion_detected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("on motion detected");
    this.appendStatementInput("do_statements")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("do");
    this.appendStatementInput("ifnot_statements")
        .setCheck(null)
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("else");
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>