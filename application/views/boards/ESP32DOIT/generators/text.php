<script>
Blockly.Arduino['convert_number_to_string'] = function(block) {
  var value_number = Blockly.Arduino.valueToCode(block, 'number', Blockly.Arduino.ORDER_ATOMIC);
  if (!validatorSetup(block)) { return ''; }
  if (!validatorEmpty(block, value_number)) { return ''; }
  var code = `String(${value_number})`;
  return [code, Blockly.Arduino.ORDER_UNARY_POSTFIX];
};

Blockly.Arduino['c_string'] = function(block) {
  var value_number = Blockly.Arduino.valueToCode(block, 'number', Blockly.Arduino.ORDER_ATOMIC);
  if (!validatorSetup(block)) { return ''; }
  if (!validatorEmpty(block, value_number)) { return ''; }
  var code = `String(${value_number}).c_str()`;
  return [code, Blockly.Arduino.ORDER_UNARY_POSTFIX];
};
</script>