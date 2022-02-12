Blockly.Blocks['led_lamp'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/double-j-design/childish/128/Bulb-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("turn led")
        .appendField(new Blockly.FieldDropdown([["on","HIGH"], ["off","LOW"]]), "state")
        .appendField("with pin")
        .appendField(new Blockly.FieldDropdown(ESP32_PIN), "pin");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['led_deem_setup'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/double-j-design/childish/128/Bulb-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("led deem setup");
    this.setInputsInline(true);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['led_deem_attach_pin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/double-j-design/childish/128/Bulb-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("led deem attach pin")
        .appendField(new Blockly.FieldDropdown([["D5","5"], ["D16 (RX2)","16"], ["D17 (TX2)","17"]]), "pin");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['led_deem_brightness'] = {
  init: function() {
    this.appendValueInput("dutycycle")
        .setCheck('Number')
        .appendField(new Blockly.FieldImage("https://icons.iconarchive.com/icons/double-j-design/childish/128/Bulb-icon.png", 30, 40, { alt: "*", flipRtl: "FALSE" }))
        .appendField("led deem brigthness");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};