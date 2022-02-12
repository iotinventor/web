<script>
Blockly.Blocks['hc_sr04_get_distance'] = {
  init: function() {
    this.appendValueInput("duration")
        .setCheck("Number")
        .appendField("ultrasonic hc-sr04 get distance")
        .appendField(new Blockly.FieldDropdown([["cm","cm"], ["inch","inch"]]), "unit")
        .appendField("duration");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>