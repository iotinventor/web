<script>
Blockly.Arduino['negate'] = function(block) {
  if (!validatorSetupForever(block)) {
    return '';
  }
  var value_negate = Blockly.Arduino.valueToCode(block, 'negate', Blockly.Arduino.ORDER_ATOMIC);
  var code = `-${value_negate}`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>