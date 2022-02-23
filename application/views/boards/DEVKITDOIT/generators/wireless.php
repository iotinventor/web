<script>

function buildBluetooth() {
  Blockly.Arduino.definitions_['include_bluetoothserial_h'] = `#include "BluetoothSerial.h"`;
  Blockly.Arduino.definitions_['bluetooth_compatibility'] = `
  #if !defined(CONFIG_BT_ENABLED) || !defined(CONFIG_BLUEDROID_ENABLED)
  #error Bluetooth is not enabled! Please run "make menuconfig" to and enable it
  #endif
  `;

  Blockly.Arduino.definitions_['bluetoothserial_serialbt'] = `BluetoothSerial SerialBT;`;
  Blockly.Arduino.definitions_['blutooth_message'] = `String message = "";`;
  Blockly.Arduino.definitions_['blutooth_incoming_char'] = `char incomingChar;`;
}


function buildWiFi() {
  Blockly.Arduino.definitions_['01_def_wifi'] = `#include <WiFi.h>`;
  Blockly.Arduino.definitions_['02_def_wifi'] = `#include <AsyncTCP.h>`;
  Blockly.Arduino.definitions_['03_def_wifi'] = `#include <ESPAsyncWebServer.h>`;
  Blockly.Arduino.definitions_['04_def_wifi'] = `AsyncWebServer server(80);`;
}


Blockly.Arduino['on_bluetooth_is_available'] = function(block) {
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  buildBluetooth();
  var code = `
if (SerialBT.available()){
  incomingChar = SerialBT.read();
  if (incomingChar != '\\n'){
    message += String(incomingChar);
  }
  else{
    message = "";
  }
  
  ${statements_statements}
}
  `;
  return code;
};





Blockly.Arduino['bluetooth_set_name'] = function(block) {
  var text_bluetooth_name = block.getFieldValue('bluetooth name');
  buildBluetooth();
  var code = `SerialBT.begin("${text_bluetooth_name}");\n`;
  return code;
};


Blockly.Arduino['bluetooth_received'] = function(block) {
  var text_key = block.getFieldValue('key');
  buildBluetooth();
  var code = `message == "${text_key}"`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['bluetooth_send'] = function(block) {
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_ATOMIC);
  buildBluetooth();
  var code = `SerialBT.println(${value_data});\n`;
  return code;
};


Blockly.Arduino['wifi_set_ssid_password'] = function(block) {
  var text_ssid = block.getFieldValue('ssid');
  var text_password = block.getFieldValue('password');
  buildWiFi();
  Blockly.Arduino.setups_['01_wifi_setups'] = `WiFi.begin("${text_ssid}", "${text_password}");`;
  var code = '';
  return code;
};


Blockly.Arduino['on_wifi_try_to_connect'] = function(block) {
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  var code = `
while (WiFi.status() != WL_CONNECTED) {
  delay(1000);
  ${statements_statements}
}  
`;
  buildWiFi();
  Blockly.Arduino.setups_['02_wifi_setups'] = code;
  return "";
};


Blockly.Arduino['on_wifi_is_connected'] = function(block) {
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  var code = `
if (WiFi.status() == WL_CONNECTED) {
  ${statements_statements}
}  
`;
  buildWiFi();
  Blockly.Arduino.setups_['03_wifi_setups'] = code;
  return "";
};




Blockly.Arduino['local_ip'] = function(block) {
  buildWiFi();
  var code = 'WiFi.localIP()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['wifi_still_connected'] = function(block) {
  buildWiFi();
  var code = 'WiFi.status() == WL_CONNECTED';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


function buildServer() {
  Blockly.Arduino.setups_['02_server'] = `server.begin();`;
}

Blockly.Arduino['on_server_called'] = function(block) {
  var text_path = block.getFieldValue('path');
  var statements_statements = Blockly.Arduino.statementToCode(block, 'statements');
  buildServer();
  var code = `
server.on("${text_path}", HTTP_GET, [] (AsyncWebServerRequest *request) {
  ${statements_statements}
}
  `;
  Blockly.Arduino.setups_[`01_server_${text_path}`] = code;
  return '';
};


Blockly.Arduino['server_has'] = function(block) {
  var text_param = block.getFieldValue('param');
  buildServer();
  var code = `request->hasParam(${text_param})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['server_get'] = function(block) {
  var text_param = block.getFieldValue('param');
  
  var code = `request->getParam(${text_param})->value()`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['server_get'] = function(block) {
  var text_param = block.getFieldValue('param');
  var dropdown_convert = block.getFieldValue('convert');
  buildServer();
  var code = `request->getParam(${text_param})->${dropdown_convert}`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['server_send'] = function(block) {
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_ATOMIC);
  buildServer();
  var code = '...;\n';
  return code;
};
</script>