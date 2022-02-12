<script>
Blockly.Blocks['convert_number_to_string'] = {
  init: function() {
    this.appendValueInput("number")
        .setCheck("Number")
        .appendField("convert number");
    this.appendDummyInput()
        .appendField("to string");
    this.setInputsInline(true);
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['c_string'] = {
  init: function() {
    this.appendValueInput("number")
        .setCheck("Number")
        .appendField("convert number");
    this.appendDummyInput()
        .appendField("to c string");
    this.setInputsInline(true);
    this.setOutput(true, "String");
    this.setColour(120);
 this.setTooltip("Returns a pointer to an array that contains a null-terminated sequence of characters (i.e., a C-string) representing the current value of the string object.");
 this.setHelpUrl("https://www.cplusplus.com/reference/string/string/c_str/");
  }
};
</script>