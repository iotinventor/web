<script>

function buildNote() {
  Blockly.Arduino.definitions_['include_tone_32_h'] = `#include <Tone32.h>`;
  Blockly.Arduino.definitions_['define_buzzer_pin_5'] = `#define BUZZER_PIN 5`;
}

function buildBeep() {
  Blockly.Arduino.definitions_['define_buzzer_pin_5'] = `#define BUZZER_PIN 5`;
  Blockly.Arduino.setups_['pin_mode_buzzer_5'] = `pinMode(BUZZER_PIN, OUTPUT);`;
}

function buildLamp() {
  Blockly.Arduino.definitions_['define_lamp_pin_16'] = `#define LAMP_PIN 16`;
  Blockly.Arduino.setups_['pin_mode_lamp_16'] = `pinMode(LAMP_PIN, OUTPUT);`;
}

function buildBrightness() {
  buildLamp();
  Blockly.Arduino.setups_['led_c_setup_lamp'] = `ledcSetup(0, 5000, 8);`;
  Blockly.Arduino.setups_['led_c_attach_pin_lamp'] = `ledcAttachPin(LAMP_PIN, 0);`;

}

Blockly.Arduino['play_note'] = function(block) {
  var dropdown_note = block.getFieldValue('note');
  var dropdown_duration = block.getFieldValue('duration');
  buildNote();
  var code = `tone(BUZZER_PIN, ${dropdown_note}, ${dropdown_duration}, 0);\n`;
  return code;
};

Blockly.Arduino['stop_note'] = function(block) {
  buildNote();
  var code = 'noTone(BUZZER_PIN, 0);\n';
  return code;
};

Blockly.Arduino['play_beep'] = function(block) {
  var code = 'digitalWrite(BUZZER_PIN, HIGH);\n';
  buildBeep();
  return code;
};

Blockly.Arduino['stop_beep'] = function(block) {
  var code = 'digitalWrite(BUZZER_PIN, LOW);\n';
  buildBeep();
  return code;
};


Blockly.Arduino['turn_on_lamp'] = function(block) {
  buildLamp();
  var code = 'digitalWrite(LAMP_PIN, HIGH);\n';
  return code;
};

Blockly.Arduino['turn_off_lamp'] = function(block) {
  buildLamp();
  var code = 'digitalWrite(LAMP_PIN, LOW);\n';
  return code;
};

Blockly.Arduino['lamp'] = function(block) {
  var dropdown_brightness = block.getFieldValue('brightness');
  buildBrightness();
  var code = `ledcWrite(0, ${dropdown_brightness});\n`;
  return code;
};
</script>