<script>

function btBegin() {
  Blockly.Arduino.definitions_['include BluetoothSerial h'] = `#include "BluetoothSerial.h"`;
  Blockly.Arduino.definitions_['bluetooth handler'] = `
#if !defined(CONFIG_BT_ENABLED) || !defined(CONFIG_BLUEDROID_ENABLED)
#error Bluetooth is not enabled! Please run make menuconfig to and enable it
#endif
  `;
  Blockly.Arduino.definitions_['BluetoothSerial SerialBT'] = `BluetoothSerial SerialBT;`;
}


Blockly.Arduino['bluetooth_begin'] = function(block) {
  var value_name = Blockly.Arduino.valueToCode(block, 'name', Blockly.Arduino.ORDER_NONE);

  if (!validatorSetup(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_name)) {
    return '';
  }

  btBegin();
  var code = `SerialBT.begin(${value_name});\n`;
  return code;
};


Blockly.Arduino['bluetooth_available'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var code = `SerialBT.available()`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['bluetooth_read'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  var code = `SerialBT.read()`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['bluetooth_write'] = function(block) {
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_NONE);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_data)) {
    return '';
  }
  var code = `SerialBT.write(${value_data});\n`;
  return code;
};


Blockly.Arduino['bluetooth_println'] = function(block) {
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_NONE);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_data)) {
    return '';
  }
  var code = `SerialBT.println(${value_data});\n`;
  return code;
};


Blockly.Arduino['bt_allow_accept_string'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  btBegin();

  Blockly.Arduino.definitions_['char_bt_incoming_char'] = `char bt_incoming_char;`;
  Blockly.Arduino.definitions_['string_bt_message'] = `String bt_message = "";`;
  var backslash = "\\n";
  var code = `
char bt_incoming_char = SerialBT.read();
if (bt_incoming_char != '${backslash}') {
  bt_message += String(bt_incoming_char);
}
else{
  bt_message = "";
}
`;
  return code;
};


Blockly.Arduino['bluetooth_read_string'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, Blockly.Arduino.definitions_['string_bt_message'])) {
    return '';
  }

  btBegin();

  var code = `bt_message`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};
</script>