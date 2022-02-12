<script>
Blockly.Blocks['dht_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("DHT begin using")
        .appendField(new Blockly.FieldDropdown([["DHT11","DHT11"], ["DHT22","DHT22"], ["DHT21","DHT21"]]), "type");
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("with pin");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['dht_read_humidity'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("DHT read humidity");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['dht_read_temperature'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("DHT read temperature (°C)");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['dht_read_temperature_fahrenheit'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("DHT read temperature (℉)");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


Blockly.Blocks['dht_compute_head_index'] = {
  init: function() {
    this.appendValueInput("f")
        .setCheck("Number")
        .appendField("DHT compute heat index (℉)");
    this.appendValueInput("h")
        .setCheck("Number")
        .appendField("humidity");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

</script>