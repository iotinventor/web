<script>
Blockly.Arduino['ledcsetup'] = function(block) {
  var value_channel = Blockly.Arduino.valueToCode(block, 'channel', Blockly.Arduino.ORDER_ATOMIC);
  var value_frequency = Blockly.Arduino.valueToCode(block, 'frequency', Blockly.Arduino.ORDER_ATOMIC);
  var value_resolution = Blockly.Arduino.valueToCode(block, 'resolution', Blockly.Arduino.ORDER_ATOMIC);

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_channel)) {
    return '';
  }
  
  if (!validatorEmpty(block, value_frequency)) {
    return '';
  }

  if (!validatorEmpty(block, value_resolution)) {
    return '';
  }

  var code = `ledcSetup(${value_channel}, ${value_frequency}, ${value_resolution});\n`;
  return code;
};

Blockly.Arduino['ledcattachpin'] = function(block) {
  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);
  var value_channel = Blockly.Arduino.valueToCode(block, 'channel', Blockly.Arduino.ORDER_ATOMIC);
  
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_pin)) {
    return '';
  }
  
  if (!validatorEmpty(block, value_channel)) {
    return '';
  }

  var code = `ledcAttachPin(${value_pin}, ${value_channel});\n`;
  return code;
};

Blockly.Arduino['ledcwrite'] = function(block) {
  var value_channel = Blockly.Arduino.valueToCode(block, 'channel', Blockly.Arduino.ORDER_ATOMIC);
  var value_duty_cycle = Blockly.Arduino.valueToCode(block, 'duty cycle', Blockly.Arduino.ORDER_ATOMIC);

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_channel)) {
    return '';
  }

  if (!validatorEmpty(block, value_duty_cycle)) {
    return '';
  }
  
  var code = `ledcWrite(${value_channel}, ${value_duty_cycle});\n`;
  return code;
};
</script>