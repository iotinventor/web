<script>
Blockly.Arduino['dht_begin'] = function(block) {
  if (!validatorSetup(block)) {
    return '';
  }

  var dropdown_type = block.getFieldValue('type');
  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);

  if (!value_pin) {
    return '';
  }

  Blockly.Arduino.definitions_['include_dht'] = `#include "DHT.h"`;
  Blockly.Arduino.definitions_['DHTPIN'] = `#define DHTPIN ${value_pin}`;
  Blockly.Arduino.definitions_['DHTTYPE'] = `#define DHTTYPE ${dropdown_type}`;
  Blockly.Arduino.definitions_['DHT'] = `DHT dht(DHTPIN, DHTTYPE);`;
  
  var code = 'dht.begin();\n';
  return code;
};

Blockly.Arduino['dht_read_humidity'] = function(block) {
  if (!validatorSetupForever(block)) {
    return '';
  }
  var code = 'dht.readHumidity()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['dht_read_temperature'] = function(block) {
  if (!validatorSetupForever(block)) {
    return '';
  }

  var code = 'dht.readTemperature()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['dht_read_temperature_fahrenheit'] = function(block) {
  if (!validatorSetupForever(block)) {
    return '';
  }

  var code = 'dht.readTemperature(true)';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['dht_compute_head_index'] = function(block) {
  if (!validatorSetupForever(block)) {
    return '';
  }

  var value_f = Blockly.Arduino.valueToCode(block, 'f', Blockly.Arduino.ORDER_ATOMIC);
  var value_h = Blockly.Arduino.valueToCode(block, 'h', Blockly.Arduino.ORDER_ATOMIC);

  if (!value_f || !value_h) {
    return '';
  }
  
  var code = `dht.computeHeatIndex(${value_f}, ${value_h})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};





</script>