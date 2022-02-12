<script>

function serverBegin() {
  Blockly.Arduino.definitions_['include_wificlient_h'] = "#include <ESP8266WiFi.h>";
}


Blockly.Arduino['wifi_begin'] = function(block) {
  var text_ssid = block.getFieldValue('ssid');
  var text_password = block.getFieldValue('password');

  if (!validatorSetup(block)) {
    return '';
  }

  if (!validatorEmpty(block, text_ssid)) {
    return '';
  }

  if (!validatorEmpty(block, text_password)) {
    return '';
  }

  serverBegin();

  Blockly.Arduino.definitions_['wifi_ssid'] = `const char* ssid = "${text_ssid}";`;
  Blockly.Arduino.definitions_['wifi_password'] = `const char* password = "${text_password}";`;
  
  var code = `WiFi.begin(ssid, password);\n`;
  return code;
};


Blockly.Arduino['wifi_mode'] = function(block) {
  var dropdown_mode = block.getFieldValue('mode');

  if (!validatorSetup(block)) {
    return '';
  }

  if (!validatorEmpty(block, dropdown_mode)) {
    return '';
  }

  serverBegin();
  
  var code = `WiFi.mode(${dropdown_mode});\n`;
  return code;
};


Blockly.Arduino['wifi_status'] = function(block) { 
  if (!validatorSetup(block)) {
    return '';
  }

  serverBegin();

  var code = 'WiFi.status()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['wifi_local_ip'] = function(block) {
  if (!validatorAll(block)) {
    return '';
  }

  serverBegin();
  var code = 'WiFi.localIP()';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['wifi_wl_connected'] = function(block) {
  if (!validatorSetup(block)) {
    return '';
  }

  serverBegin();
  
  var code = 'WL_CONNECTED';
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['server_on'] = function(block) {
  var text_path = block.getFieldValue('path');
  var dropdown_method = block.getFieldValue('method');
  var value_handlers = Blockly.Arduino.valueToCode(block, 'handlers', Blockly.Arduino.ORDER_UNARY_PREFIX);

  if (!validatorSetup(block)) {
    return '';
  }

  if (!validatorEmpty(block, text_path)) {
    return '';
  }

  if (!validatorEmpty(block, value_handlers)) {
    return '';
  }

  if (!validatorEmpty(block, dropdown_method)) {
    return '';
  }

  serverBegin();

  var code = `server.on("${text_path}", ${dropdown_method}, ${value_handlers});\n`;
  return code;
};

Blockly.Arduino['server_send'] = function(block) {
  var dropdown_status_code = block.getFieldValue('status code');
  var value_data = Blockly.Arduino.valueToCode(block, 'data', Blockly.Arduino.ORDER_NONE);
  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, dropdown_status_code)) {
    return '';
  }

  if (!validatorEmpty(block, value_data)) {
    return '';
  }

  serverBegin();
  var code = `server.send(${dropdown_status_code}, "text/plain", ${value_data});\n`;
  return code;
};

Blockly.Arduino['server_has_argument'] = function(block) {
  var text_arg = block.getFieldValue('arg');

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, text_arg)) {
    return '';
  }

  serverBegin();
  var code = `server.hasArg("${text_arg}")`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};

Blockly.Arduino['server_argument'] = function(block) {
  var text_arg = block.getFieldValue('arg');

  if (!validatorAll(block)) {
    return '';
  }

  if (!validatorEmpty(block, text_arg)) {
    return '';
  }

  serverBegin();

  var code = `server.arg(${text_arg})`;
  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['server_handle_client'] = function(block) {
  if (!validatorForever(block)) {
    return '';
  }

  serverBegin();
  var code = 'server.handleClient();\n';
  return code;
};


Blockly.Arduino['server_argument_to_int'] = function(block) {
  var value_argument = Blockly.Arduino.valueToCode(block, 'argument', Blockly.Arduino.ORDER_ATOMIC);

  if (!validatorSetup(block)) {
    return '';
  }

  if (!validatorEmpty(block, value_argument)) {
    return '';
  }

  serverBegin();

  var code = `${value_argument}.toInt()`;

  return [code, Blockly.Arduino.ORDER_UNARY_PREFIX];
};


Blockly.Arduino['server_begin'] = function(block) {
  if (!validatorSetup(block)) {
    return '';
  }

  var code = 'server.begin();\n';
  return code;
};

</script>