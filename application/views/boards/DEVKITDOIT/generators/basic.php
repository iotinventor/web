<script>

function buildOLED() {
  Blockly.Arduino.definitions_['#include <SPI.h>'] = '#include <SPI.h>';
  Blockly.Arduino.definitions_['#include <Wire.h>'] = '#include <Wire.h>';
  Blockly.Arduino.definitions_['#include <Adafruit_GFX.h>'] = '#include <Adafruit_GFX.h>';
  Blockly.Arduino.definitions_['#include <Adafruit_SSD1306.h>'] = '#include <Adafruit_SSD1306.h>';
  Blockly.Arduino.definitions_['#define SCREEN_WIDTH 128'] = '#define SCREEN_WIDTH 128';
  Blockly.Arduino.definitions_['#define SCREEN_HEIGHT 64'] = '#define SCREEN_HEIGHT 64';
  Blockly.Arduino.definitions_['#define SCREEN_HEIGHT 64'] = '#define SCREEN_HEIGHT 64';
  Blockly.Arduino.definitions_['#define OLED_RESET -1'] = '#define OLED_RESET -1';
  Blockly.Arduino.definitions_['Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET)'] = 'Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET);';

  Blockly.Arduino.setups_['if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) {'] = `
if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) { 
  Serial.println(F("SSD1306 allocation failed"));
  for(;;); // Don't proceed, loop forever
}
display.clearDisplay();
display.setTextColor(WHITE);
`;
}

function buildIcon(key) {
  if (Blockly.Arduino.definitions_['icon_' + key]) {
    delete Blockly.Arduino.definitions_['icon_' + key];
  }

  Blockly.Arduino.definitions_['icon_' + key] = icons[key];
}

function buildArrow(key) {
  if (Blockly.Arduino.definitions_['arrow_' + key]) {
    delete Blockly.Arduino.definitions_['arrow_' + key];
  }

  Blockly.Arduino.definitions_['arrow_' + key] = arrows[key];
}


Blockly.Arduino['on_start'] = function(block) {
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  if (Blockly.Arduino.definitions_['on_start']) {
    blocklyWorkspace.getBlockById(block.id).setWarningText("Duplicate on start!");
    delete Blockly.Arduino.definitions_['on_start'];
    return '';
  } else {
    blocklyWorkspace.getBlockById(block.id).setWarningText(null);
    Blockly.Arduino.definitions_['on_start'] = '// on_start';
    Blockly.Arduino.setups_['setups'] = statements_statements;
    var code = '';
    return code;
  }
};

Blockly.Arduino['forever'] = function(block) {
  if (Blockly.Arduino.definitions_['forever']) {
    blocklyWorkspace.getBlockById(block.id).setWarningText("Duplicate forever!");
    delete Blockly.Arduino.definitions_['forever'];
    return '';
  } else {
    blocklyWorkspace.getBlockById(block.id).setWarningText(null);
    Blockly.Arduino.definitions_['forever'] = '// forever';
    var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
    var code = statements_statements;
    return code;
  }
};

Blockly.Arduino['add_icon_to_screen'] = function(block) {
  var dropdown_icon = block.getFieldValue('icon');
  buildOLED();
  buildIcon(dropdown_icon);
  var code = `
display.clearDisplay();
display.drawBitmap(0, 0, ${dropdown_icon}, 128, 64, 1);
display.display();`;
  return code;
};

Blockly.Arduino['add_to_screen'] = function(block) {
  var value_text = Blockly.Arduino.valueToCode(block, 'text', Blockly.Arduino.ORDER_ATOMIC);
  buildOLED();
  
  return code;
};

Blockly.Arduino['add_to_screen'] = function(block) {
  var value_text = Blockly.Arduino.valueToCode(block, 'text', Blockly.Arduino.ORDER_ATOMIC);
  var value_x = Blockly.Arduino.valueToCode(block, 'x', Blockly.Arduino.ORDER_ATOMIC);
  var value_y = Blockly.Arduino.valueToCode(block, 'y', Blockly.Arduino.ORDER_ATOMIC);
  var dropdown_size = block.getFieldValue('size');
  buildOLED();
  var code = `
display.setTextSize(${dropdown_size});
display.setCursor(${value_x},${value_y});
display.print(${value_text});
`;
  return code;
};

Blockly.Arduino['show_screen'] = function(block) {
  var code = 'display.display();\n';
  buildOLED();
  return code;
};

Blockly.Arduino['clear_screen'] = function(block) {
  buildOLED();
  var code = 'display.clearDisplay();\n';
  return code;
};

Blockly.Arduino['pause'] = function(block) {
  var dropdown_time = block.getFieldValue('time');
  var code = `delay(${dropdown_time});\n`;
  return code;
};

Blockly.Arduino['add_arrow_to_screen'] = function(block) {
  var dropdown_arrow = block.getFieldValue('arrow');
  buildOLED();
  buildArrow(dropdown_arrow);
  var code = `
display.clearDisplay();
display.drawBitmap(0, 0, ${dropdown_arrow}, 128, 64, 1);
display.display();`;
  return code;
};
</script>