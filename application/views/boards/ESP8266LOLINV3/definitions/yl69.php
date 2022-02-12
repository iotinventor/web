<script>
Blockly.Blocks['yl_69_get_soil_moisture_in_percent'] = {
  init: function() {
    this.appendValueInput("pin")
        .setCheck("Number")
        .appendField("yl69.getMoisture (%) with pin");
    this.setInputsInline(true);
    this.setOutput(true, null);
    this.setColour(120);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
</script>