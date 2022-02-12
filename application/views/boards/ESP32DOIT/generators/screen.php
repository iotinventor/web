<script>
function oledBegin() {
  Blockly.Arduino.definitions_['include Wire h'] = `#include <Wire.h>`;
  Blockly.Arduino.definitions_['include Adafruit_GFX h'] = `#include <Adafruit_GFX.h>`;
  Blockly.Arduino.definitions_['include Adafruit_SSD1306 h'] = `#include <Adafruit_SSD1306.h>`;
  Blockly.Arduino.definitions_['define SCREEN_WIDTH 128'] = `#define SCREEN_WIDTH 128`;
  Blockly.Arduino.definitions_['define SCREEN_HEIGHT 64'] = `#define SCREEN_HEIGHT 64`;
  Blockly.Arduino.definitions_['Adafruit_SSD1306 display SCREEN_WIDTH SCREEN_HEIGHT &Wire -1'] = `Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, -1);`;
}


Blockly.Arduino['oled_begin'] = function(block) {
  
  if (!validatorAll(block)) {
    return '';
  }

  oledBegin();

  var code = `
if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) {
  Serial.println(F("SSD1306 allocation failed"));
  for(;;);
}`;
  return code;
};


Blockly.Arduino['oled_clear'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  oledBegin();

  var code = 'display.clearDisplay();\n';
  return code;
};


Blockly.Arduino['oled_text_size'] = function(block) {
  var value_name = Blockly.Arduino.valueToCode(block, 'NAME', Blockly.Arduino.ORDER_ATOMIC);

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_name)) {
    return '';
  }

  oledBegin();

  var code = `display.setTextSize(${value_name});\n`;
  return code;
};


Blockly.Arduino['oled_text_color'] = function(block) {
  var dropdown_color = block.getFieldValue('color');

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, dropdown_color)) {
    return '';
  }

  oledBegin();

  var code = `display.setTextColor(${dropdown_color});\n`;
  return code;
};


Blockly.Arduino['oled_cursor'] = function(block) {
  var value_x = Blockly.Arduino.valueToCode(block, 'x', Blockly.Arduino.ORDER_ATOMIC);
  var value_y = Blockly.Arduino.valueToCode(block, 'y', Blockly.Arduino.ORDER_ATOMIC);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_x)) {
    return '';
  }

  if (!validatorEmpty(block, value_y)) {
    return '';
  }

  oledBegin();
  var code = `display.setCursor(${value_x}, ${value_y});\n`;
  return code;
};


Blockly.Arduino['oled_println'] = function(block) {
  var value_name = Blockly.Arduino.valueToCode(block, 'NAME', Blockly.Arduino.ORDER_ATOMIC);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_name)) {
    return '';
  }

  oledBegin();

  var code = `display.println(${value_name});\n`;
  return code;
};


Blockly.Arduino['oled_display'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var code = 'display.display();\n';
  return code;
};


Blockly.Arduino['oled_scroll_right'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = 'display.startscrollright(0x00, 0x0F);\n';
  return code;
};


Blockly.Arduino['oled_scroll_left'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = 'display.startscrollleft(0x00, 0x0F);\n';
  return code;
};


Blockly.Arduino['oled_scroll_diagonal_right'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = 'display.startscrolldiagright(0x00, 0x07);\n';
  return code;
};


Blockly.Arduino['oled_scroll_diagonal_left'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = 'display.startscrolldiagleft(0x00, 0x07);\n';
  return code;
};


Blockly.Arduino['oled_stop_scroll'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = 'display.stopscroll();\n';
  return code;
};


Blockly.Arduino['oled_print'] = function(block) {
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_ATOMIC);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_data)) {
    return '';
  }

  oledBegin();

  var code = `display.print(${value_data});\n`;
  return code;
};


Blockly.Arduino['oled_cp437'] = function(block) {
  var checkbox_bool = block.getFieldValue('bool') == 'TRUE';
  if (!validatorAll(block)) {
    return '';
  }
  oledBegin();
  var code = `display.cp437(${checkbox_bool});\n`;
  return code;
};
</script>