<xml id="toolbox" style="display: none">
  <category name="Pin">
    <block type="pin_input">
      <field name="pins">1</field>
    </block>
    <block type="pin_output">
      <field name="pins">1</field>
    </block>
    <block type="pin_pwm">
      <field name="pins">3</field>
    </block>
    <block type="pin_analog">
      <field name="pins">A0</field>
    </block>
    <block type="pin_spi">
      <field name="pins">10</field>
    </block>
    <block type="pin_i2c">
      <field name="pins">A4</field>
    </block>
    <block type="pin_led_builtin"></block>
    <block type="state">
      <field name="state">HIGH</field>
    </block>
  </category>
  <category name="Core">
    <block type="serial_begin">
      <field name="baud">9600</field>
    </block>
    <block type="serial_println"></block>
    <block type="serial_print"></block>
    <block type="analog_write"></block>
    <block type="digital_write"></block>
    <block type="serial_read"></block>
    <block type="analog_read"></block>
    <block type="digital_read"></block>
    <block type="serial_available"></block>
  </category>
  <category name="Advanced Core">
    <block type="use_millis">
      <field name="1000">1000</field>
    </block>
    <block type="return_nan"></block>
    <block type="isnan"></block>
    <block type="pulse_in"></block>
    
  </category>
  <category name="Humidity">
    <block type="dht_begin">
      <field name="type">DHT11</field>
    </block>
    <block type="dht_read_humidity"></block>
    <block type="dht_read_temperature"></block>
    <block type="dht_read_temperature_fahrenheit"></block>
    <block type="dht_compute_head_index"></block>
  </category>
  <category name="Logic">
    <block type="controls_if"></block>
    <block type="logic_compare"></block>
    <block type="logic_operation"></block>
    <block type="logic_negate"></block>
    <block type="logic_null"></block>
  </category>
  <category name="Control">
    <block type="base_delay">
      <value name="DELAY_TIME">
        <block type="math_number">
          <field name="NUM">1000</field>
        </block>
      </value>
    </block>
    <block type="controls_for">
      <value name="FROM">
        <block type="math_number">
          <field name="NUM">1</field>
        </block>
      </value>
      <value name="TO">
        <block type="math_number">
          <field name="NUM">10</field>
        </block>
      </value>
    </block>
    <block type="controls_whileUntil"></block>
  </category>
  <category name="Math">
    <block type="math_number"></block>
    <block type="negate"></block>
    <block type="math_arithmetic"></block>
    <block type="base_map">
      <value name="DMAX">
        <block type="math_number">
          <field name="NUM">180</field>
        </block>
      </value>
    </block>
  </category>
  <category name="Text">
    <block type="text"></block>
  </category>
  
  <category name="Variables" custom="VARIABLE"></category>
  <category name="Functions" custom="PROCEDURE"></category>
</xml>