Blockly.Blocks['wifi_station'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/double-j-design/super-mono-3d/128/wifi-wlan-icon.png", 30, 30, { alt: "*", flipRtl: "FALSE" }))
        .appendField("setup wifi")
        .appendField(new Blockly.FieldTextInput("ssid"), "ssid")
        .appendField("&")
        .appendField(new Blockly.FieldTextInput("password"), "password");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['serial_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/icojam/onebit/48/console-icon.png", 30, 30, { alt: "*", flipRtl: "FALSE" }))
        .appendField("serial begin")
        .appendField(new Blockly.FieldDropdown([["115200","115200"], ["9600","9600"]]), "baud");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['blink'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/custom-icon-design/flatastic-8/128/Bulb-icon.png", 30, 30, { alt: "*", flipRtl: "FALSE" }))
        .appendField("blink blink")
        .appendField(new Blockly.FieldDropdown([["500","500"], ["1000","1000"], ["2000","2000"]]), "interval")
        .appendField("miliseconds");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};