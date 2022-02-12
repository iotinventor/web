<script>
Blockly.Blocks['negate'] = {
  init: function() {
    this.appendValueInput("negate")
        .setCheck(["Number", "Boolean"])
        .appendField("negate");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>