<script>
Blockly.Arduino['pin_input'] = function(block) {
  var dropdown_pins = block.getFieldValue('pins');
  if (!validatorAll(block)) {
    return '';
  }
  var code = dropdown_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_output'] = function(block) {
  var dropdown_pins = block.getFieldValue('pins');
  if (!validatorAll(block)) {
    return '';
  }
  var code = dropdown_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['state'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var dropdown_state = block.getFieldValue('state');
  var code = dropdown_state === "HIGH" ? "LOW": "HIGH";
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_pwm'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var dropdown_pins = block.getFieldValue('pins');
  var code = dropdown_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_analog'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var dropdown_pins = block.getFieldValue('pins');

  var code = dropdown_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_spi'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var dropdown_pins = block.getFieldValue('pins');
  var code = dropdwon_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_i2c'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var dropdown_pins = block.getFieldValue('pins');
  var code = dropdwon_pins;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['pin_led_builtin'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var code = 'LED_BUILTIN';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>