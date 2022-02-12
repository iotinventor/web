<script>


Blockly.Arduino['setup'] = function(block) {
  var statements_setup = Blockly.Arduino.statementToCode(block, 'setup');
  Blockly.Arduino.setups_['setups'] = statements_setup;
  var code = '';
  return code;
};

Blockly.Arduino['forever'] = function(block) {
  var statements_forever = Blockly.Arduino.statementToCode(block, 'forever');
  
  var code = statements_forever;
  return code;
};


Blockly.Arduino['digital_write'] = function(block) {
  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_NONE);
  var value_state = Blockly.Arduino.valueToCode(block, 'state', Blockly.Arduino.ORDER_NONE);
  
  if (!validatorAll(block)) {
    return '';
  }

  if ( !value_pin || !value_state ) {
    return '';
  }

  Blockly.Arduino.setups_['pin_mode_' + value_pin + '_output'] = `\tpinMode(${value_pin}, OUTPUT);`; 
  var code = `digitalWrite(${value_pin}, ${value_state});\n`;
  return code;
};

Blockly.Arduino['digital_read'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_NONE);

  if ( !value_pin ) {
    return '';
  }

  Blockly.Arduino.setups_['pin_mode_' + value_pin + '_input'] = `\tpinMode(${value_pin}, INPUT);`; 
  var code = `digitalWrite(${value_pin})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['serial_begin'] = function(block) {
  if (!validatorSetup(block)) {
    return '';
  }

  var dropdown_baud = block.getFieldValue('baud');
  Blockly.Arduino.setups_['serial_begin'] = `Serial.begin(${dropdown_baud});`;
  var code = '';
  return code;
};

Blockly.Arduino['serial_println'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_NONE);
  var code = `Serial.println(${value_data});\n`;
  return code;
};

Blockly.Arduino['serial_print'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_ATOMIC);
  var code = `Serial.print(${value_data});\n`;
  return code;
};

Blockly.Arduino['serial_available'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var code = 'Serial.available()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['serial_read'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  var code = 'Serial.read()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['analog_write'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_ATOMIC);

  Blockly.Arduino.setups_['pin_mode_' + value_pin + '_output'] = `\tpinMode(${value_pin}, OUTPUT);`; 

  var code = `analogWrite(${value_pin}, ${value_data});\n`;
  return code;
};


Blockly.Arduino['digital_read'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);
  Blockly.Arduino.setups_['pin_mode_' + value_pin + '_input'] = `\tpinMode(${value_pin}, INPUT);`; 

  var code = `digitalRead(${value_pin})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pulse_in'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);
  var value_state = Blockly.Arduino.valueToCode(block, 'state', Blockly.Arduino.ORDER_ATOMIC);
  Blockly.Arduino.setups_['pin_mode_' + value_pin + '_input'] = `\tpinMode(${value_pin}, INPUT);`; 
  var code = `pulseIn(${value_pin}, ${value_state})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['isnan'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_value = Blockly.Arduino.valueToCode(block, 'value', Blockly.Arduino.ORDER_ATOMIC);
  
  if (!value_value) {
    return '';
  }

  var code = `isnan(${value_value})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['return_nan'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var code = 'return;\n';
  return code;
};


Blockly.Arduino['analog_read'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var value_pin = Blockly.Arduino.valueToCode(block, 'pin', Blockly.Arduino.ORDER_ATOMIC);

  if (!value_pin) {
    return '';
  }

  var code = `analogRead(${value_pin})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['use_millis'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var text_1000 = block.getFieldValue('1000');
  var statements_codes = Blockly.Arduino.statementToCode(block, 'codes');

  Blockly.Arduino.definitions_['previousMillis'] = `unsigned long previousMillis = 0;`;
  Blockly.Arduino.definitions_['interval'] = `const long interval = ${text_1000};`
  var code = `
unsigned long currentMillis = millis();

if (currentMillis - previousMillis >= interval) {
  previousMillis = currentMillis;
${statements_codes}
}
\n`;
  return code;
};
</script>