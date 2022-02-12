<script>

function serverBegin() {
  Blockly.Arduino.definitions_['include_wifi_h'] = "#include <WiFi.h>";
  Blockly.Arduino.definitions_['include_asynctcp_h'] = "#include <AsyncTCP.h>";
  Blockly.Arduino.definitions_['include_espasyncwebserver_h'] = "#include <ESPAsyncWebServer.h>";
  Blockly.Arduino.definitions_['espasyncwebserver_server_80'] = "AsyncWebServer server(80);";
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
  var statements_codes = Blockly.Arduino.statementToCode(block, 'codes');
  
  if (!validatorEmpty(block, text_path)) { return ''; }
  if (!validatorEmpty(block, dropdown_method)) { return ''; }
  if (!validatorEmpty(block, statements_codes)) { return ''; }

  serverBegin();
  
  var code = `
server.on("${text_path}", ${dropdown_method}, [](AsyncWebServerRequest *request){
  ${statements_codes}
});
  `;

  
  if ( Blockly.Arduino.setups_['server_begin'] ) {
    delete Blockly.Arduino.setups['server_begin'];
  }

  Blockly.Arduino.setups_[`server_on_${text_path}_${dropdown_method}`] = code;
  Blockly.Arduino.setups_['server_begin'] = "server.begin();";

  return '';
};

Blockly.Arduino['request_send_text'] = function(block) {
  var value_text = Blockly.Arduino.valueToCode(block, 'text', Blockly.Arduino.ORDER_ATOMIC);
  var dropdown_status_code = block.getFieldValue('status_code');
  
  if (!validatorServerOn(block)) { return ''; }

  if (!validatorEmpty(block, value_text)) { return ''; }
  if (!validatorEmpty(block, dropdown_status_code)) { return ''; }
  
  var code = `request->send(${dropdown_status_code}, "text/plain", ${value_text});\n`;
  return code;
};


Blockly.Arduino['request_has_param'] = function(block) {
  var text_param = block.getFieldValue('param');
  if (!validatorServerOn(block)) { return ''; }
  if (!validatorEmpty(block, text_param)) { return ''; }

  var code = `request->hasParam("${text_param}")`;
  return [code, Blockly.Arduino.ORDER_UNARY_POSTFIX];
};

Blockly.Arduino['request_get_param_text'] = function(block) {
  var text_param = block.getFieldValue('param');
  if (!validatorServerOn(block)) { return ''; }
  if (!validatorEmpty(block, text_param)) { return ''; }
  var code = `request->getParam("${text_param}")->value()`;
  return [code, Blockly.Arduino.ORDER_UNARY_POSTFIX];
};

Blockly.Arduino['request_get_param_number'] = function(block) {
  var text_param = block.getFieldValue('param');
  if (!validatorServerOn(block)) { return ''; }
  if (!validatorEmpty(block, text_param)) { return ''; }
  var code = `request->getParam("${text_param}")->value().toInt()`;
  return [code, Blockly.Arduino.ORDER_UNARY_POSTFIX];
};

</script>