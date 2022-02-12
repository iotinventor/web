<script>
Blockly.Arduino['negate'] = function(block) {
  var value_negate = Blockly.Arduino.valueToCode(block, 'negate', Blockly.Arduino.ORDER_NONE);
  if (!validatorEmpty(block, value_negate)) {
    return '';
  }
  var code = `-${value_negate}`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>