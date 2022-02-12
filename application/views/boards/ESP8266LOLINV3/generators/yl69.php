<script>
Blockly.Arduino['yl_69_get_soil_moisture_in_percent'] = function(block) {
  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);
  
  
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_pin)) {
    return '';
  }
  
  var code = `( 100 - ( (analogRead(${value_pin}) / 1023.00) * 100 ) )`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>