<script>

function hcBegin() {
  
  Blockly.Arduino.definitions_['define SOUND_SPEED 0034'] = `#define SOUND_SPEED 0.034`;
  Blockly.Arduino.definitions_['define CM_TO_INCH 0393701'] = `#define CM_TO_INCH 0.393701`;
}

Blockly.Arduino['hc_sr04_get_distance'] = function(block) {
  var dropdown_unit = block.getFieldValue('unit');
  var value_duration = Blockly.Arduino.valueToCode(
    block, 
    'duration', 
    Blockly.Arduino.ORDER_NONE
  );

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, dropdown_unit)) {
    return '';
  }

  if (!validatorEmpty(block, value_duration)) {
    return '';
  }

  hcBegin();
  
  var code = '';

  if (dropdown_unit == "cm") {
    code = `${value_duration} * SOUND_SPEED/2`;
  } else {
    code = `(${value_duration} * SOUND_SPEED/2) * CM_TO_INCH`;
  }

  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>