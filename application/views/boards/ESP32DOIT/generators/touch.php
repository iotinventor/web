<script>
Blockly.Arduino['read_touch'] = function(block) {
  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_NONE);
  
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_pin)) {
    return '';
  }
  
  var code = `touchRead(${value_pin})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>