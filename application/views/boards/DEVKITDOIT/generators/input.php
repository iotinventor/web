<script>

function buildButtonPressed(pin) {
  Blockly.Arduino.definitions_['button_pin_' + pin] = `const int button_pin_${pin} = ${pin};`;
  Blockly.Arduino.definitions_['button_state_' + pin] = `int button_state_${pin} = 0;`;
  Blockly.Arduino.setups_['pin_mode_input_' + pin] = `pinMode(button_pin_${pin}, INPUT);`;
}


function buildPinTouchDown(pin) {
  Blockly.Arduino.definitions_['touch_pin_' + pin] = `const int touch_pin_${pin} = ${pin};`;
  Blockly.Arduino.definitions_['touch_value_' + pin] = `int touch_value_${pin} = 0;`;
  Blockly.Arduino.definitions_['touch_tresshold_' + pin] = `int touch_tresshold_${pin} = 20;`;
}


function buildTemperature() {
  Blockly.Arduino.definitions_['include_adafruit_sensor_h'] = `#include <Adafruit_Sensor.h>`;
  Blockly.Arduino.definitions_['include_dht_h'] = `#include <DHT.h>`;
  Blockly.Arduino.definitions_['dhtpin_14'] = `#define DHTPIN 14`;
  Blockly.Arduino.definitions_['dhttype_11'] = `#define DHTTYPE DHT11`;
  Blockly.Arduino.definitions_['dht'] = `DHT dht(DHTPIN, DHTTYPE);`;
  Blockly.Arduino.setups_['dht_begin'] = `dht.begin();`;
}

function buildDistance() {
  Blockly.Arduino.definitions_['trigger_pin'] = `const int trigger_pin = 5;`;
  Blockly.Arduino.definitions_['echo_pin'] = `const int echo_pin = 18;`;
  Blockly.Arduino.definitions_['define_sound_speed'] = `#define SOUND_SPEED 0.034`;
  Blockly.Arduino.definitions_['duration'] = `long duration;`;
  Blockly.Arduino.definitions_['distance_cm'] = `float distance_cm;`;
  
  Blockly.Arduino.definitions_['function_hcsr04'] = `
  float function_hcsr04() {
    digitalWrite(trigger_pin, LOW);
    delayMicroseconds(2);
    digitalWrite(trigger_pin, HIGH);
    delayMicroseconds(10);
    digitalWrite(trigger_pin, LOW);
    duration = pulseIn(echo_pin, HIGH);
    distance_cm = duration * SOUND_SPEED/2;
    return distance_cm;
  }
  `;
  Blockly.Arduino.setups_['pin_mode_trigger_pin'] = `pinMode(trigger_pin, OUTPUT);`;
  Blockly.Arduino.setups_['pin_mode_echo_pin'] = `pinMode(echo_pin, INPUT);`;
}

function buildMotion() {
  Blockly.Arduino.definitions_['motion_pin'] = `const int motion_pin = 26;`;
  Blockly.Arduino.setups_['pin_mode_motion_pin'] = `pinMode(motion_pin, INPUT_PULLUP);`;
}

Blockly.Arduino['on_button_pressed'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  
  buildButtonPressed(dropdown_pin);
  
  var code = `
button_state_${dropdown_pin} = digitalRead(button_pin_${dropdown_pin});
if (button_state_${dropdown_pin} == HIGH) {
  ${statements_statements}
}
`;
  return code;
};


Blockly.Arduino['on_button_released'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  buildButtonPressed(dropdown_pin);
  var code = `
button_state_${dropdown_pin} = digitalRead(button_pin_${dropdown_pin});
if (button_state_${dropdown_pin} == LOW) {
  ${statements_statements}
}
`;
  return code;
};


Blockly.Arduino['on_pin_touch_down'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');

  buildPinTouchDown(dropdown_pin);

  var code = `
touch_value_${dropdown_pin} = touchRead(touch_pin_${dropdown_pin});
if(touch_value_${dropdown_pin} < touch_tresshold_${dropdown_pin}) {
  ${statements_statements}
}
`;
  return code;
};

Blockly.Arduino['on_pin_touch_up'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  buildPinTouchDown(dropdown_pin);

  var code = `
touch_value_${dropdown_pin} = touchRead(touch_pin_${dropdown_pin});
if(touch_value_${dropdown_pin} > touch_tresshold_${dropdown_pin}) {
  ${statements_statements}
}
`;
  return code;
};

Blockly.Arduino['button_is_pressed'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  buildButtonPressed(dropdown_pin);
  var code = `button_state_${dropdown_pin} == HIGH`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['pin_is_touched'] = function(block) {
  var dropdown_pin = block.getFieldValue('pin');
  buildPinTouchDown(dropdown_pin);
  var code = `touch_value_${dropdown_pin} < touch_tresshold_${dropdown_pin}`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['temperature_c'] = function(block) {
  buildTemperature();

  var code = 'dht.readTemperature()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['humidity'] = function(block) {
  buildTemperature();

  var code = 'dht.readHumidity()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['soil_moisture'] = function(block) {
  var code = '100.00 - ( (analogRead(35)/4095.00) * 100.00 )';
  return [code, Blockly.Arduino.ORDER_ASSIGNMENT];
};

Blockly.Arduino['distance'] = function(block) {
  buildDistance();
  var code = 'function_hcsr04()';
  return [code, Blockly.Arduino.ORDER_ASSIGNMENT];
};


Blockly.Arduino['on_motion_detected'] = function(block) {
  var statements_do_statements = Blockly.Arduino.statementToCode(block, 'do_statements');
  var statements_ifnot_statements = Blockly.Arduino.statementToCode(block, 'ifnot_statements');
  buildMotion();
  var code = `
if (digitalRead(motion_pin) == HIGH) {
  ${statements_do_statements}
} else {
  ${statements_ifnot_statements}
}
`;
  return code;
};



</script>