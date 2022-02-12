<script>
Blockly.Blocks['wifi_begin'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi begin")
        .appendField(new Blockly.FieldTextInput("ssid"), "ssid")
        .appendField(new Blockly.FieldTextInput("password"), "password");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_mode'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi mode")
        .appendField(new Blockly.FieldDropdown([["Station","WIFI_STA"], ["Access Point","WIFI_AP"]]), "mode");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_status'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi status");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_local_ip'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wifi local ip");
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['wifi_wl_connected'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("wl connected");
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};


// Blockly.Blocks['server_on'] = {
//   init: function() {
//     this.appendDummyInput()
//         .appendField("server on")
//         .appendField(new Blockly.FieldTextInput("/path"), "path");
//     this.appendDummyInput()
//         .appendField("method")
//         .appendField(new Blockly.FieldDropdown([["GET","HTTP_GET"], ["POST","HTTP_POST"]]), "method");
//     this.appendStatementInput("codes")
//         .setCheck(null);
//     this.setInputsInline(true);
//     this.setPreviousStatement(true, null);
//     this.setNextStatement(true, null);
//     this.setColour(65);
//  this.setTooltip("");
//  this.setHelpUrl("");
//   }
// };


Blockly.Blocks['server_on'] = {
  init: function() {
    var validator = function(newValue) {
      newValue = newValue.replace("/", " ");
      newValue = newValue.split(" ");
      newValue = newValue.join("/");
      newValue = newValue.replace(" ", "").toLowerCase();

      if (newValue[0] === "/") {
        return newValue;
      } else {
        return `/${newValue}`;
      }
    };

    this.appendDummyInput()
        .appendField("server on")
        .appendField(new Blockly.FieldTextInput("path", validator), "path")
        .appendField("method")
        .appendField(new Blockly.FieldDropdown([["GET","HTTP_GET"], ["POST","HTTP_POST"]]), "method");
    this.appendStatementInput("codes")
        .setCheck(null);
    this.setColour(65);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['request_send_text'] = {
  init: function() {
    this.appendValueInput("text")
        .setCheck("String")
        .appendField("request send text");
    this.appendDummyInput()
        .appendField("status code")
        .appendField(new Blockly.FieldDropdown([["200 OK","200"], ["400 BAD REQUEST","400"], ["404 NOT FOUND","404"]]), "status_code");
    this.setInputsInline(true);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(290);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

// Blockly.Blocks['request_send_html'] = {
//   init: function() {
//     this.appendDummyInput()
//         .appendField("request send html")
//         .appendField(new Blockly.FieldTextInput("page_name"), "page");
//     this.appendDummyInput()
//         .appendField("status code")
//         .appendField(new Blockly.FieldDropdown([["200 OK","200"], ["400 BAD REQUEST","400"], ["404 NOT FOUND","404"]]), "status_code");
//     this.setInputsInline(true);
//     this.setPreviousStatement(true, null);
//     this.setNextStatement(true, null);
//     this.setColour(290);
//  this.setTooltip("");
//  this.setHelpUrl("");
//   }
// };

Blockly.Blocks['request_has_param'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("request has")
        .appendField(new Blockly.FieldTextInput("param"), "param");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['request_get_param_text'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("request get")
        .appendField(new Blockly.FieldTextInput("param"), "param")
        .appendField("to text");
    this.setInputsInline(true);
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['request_get_param_number'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("request get")
        .appendField(new Blockly.FieldTextInput("param"), "param")
        .appendField("to number");
    this.setInputsInline(true);
    this.setOutput(true, "Number");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

</script>