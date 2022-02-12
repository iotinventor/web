<xml id="toolbox" style="display: none">
  <category name="Pin IO">
    <block type="pin_input">
      <field name="pin">5</field>
    </block>
    <block type="pin_output">
      <field name="pin">5</field>
    </block>
    <block type="pin_analog">
      <field name="pin">5</field>
    </block>
    <block type="pin_pwm">
      <field name="pin">5</field>
    </block>
    <block type="pin_spi">
      <field name="pin">5</field>
    </block>
    <block type="pin_i2c">
      <field name="pin">5</field>
    </block>
    <block type="pin_led_builtin"></block>
    <block type="state">
      <field name="state">HIGH</field>
    </block>
  </category>
  <category name="Core">
    <block type="use_millis">
      <field name="1000">1000</field>
    </block>
    <block type="serial_begin">
      <field name="baud">9600</field>
    </block>
    <block type="serial_println"></block>
    <block type="serial_print"></block>
    <block type="analog_write"></block>
    <block type="digital_write"></block>
    <block type="return_nan"></block>
    <block type="serial_read"></block>
    <block type="analog_read"></block>
    <block type="digital_read"></block>
    <block type="serial_available"></block>
    <block type="isnan"></block>
    <block type="pulse_in"></block>
  </category>

  <category name="Display">
    <block type="oled_begin"></block>
    <block type="oled_clear"></block>
    <block type="oled_text_size"></block>
    <block type="oled_text_color">
      <field name="color">WHITE</field>
    </block>
    <block type="oled_cursor"></block>
    <block type="oled_print"></block>
    <block type="oled_println"></block>
    <block type="oled_display"></block>
    <block type="oled_scroll_right"></block>
    <block type="oled_scroll_left"></block>
    <block type="oled_scroll_diagonal_right"></block>
    <block type="oled_scroll_diagonal_left"></block>
    <block type="oled_stop_scroll"></block>
    <block type="oled_cp437">
      <field name="bool">TRUE</field>
    </block>
  </category>
  <category name="Sensors">
    <block type="dht_begin">
      <field name="type">DHT11</field>
    </block>
    <block type="dht_read_humidity"></block>
    <block type="dht_read_temperature"></block>
    <block type="dht_read_temperature_fahrenheit"></block>
    <block type="dht_compute_head_index"></block>
    <block type="dht_compute_head_index_celsius"></block>
    <block type="hc_sr04_get_distance">
      <field name="unit">cm</field>
    </block>
    <block type="yl_69_get_soil_moisture_in_percent"></block>
  </category>
  <category name="WiFi &amp; Server">
    <block type="wifi_mode">
      <field name="mode">WIFI_STA</field>
    </block>
    <block type="wifi_begin">
      <field name="ssid">ssid</field>
      <field name="password">password</field>
    </block>
    <block type="server_on">
      <field name="path">/path</field>
      <field name="method">HTTP_GET</field>
    </block>
    <block type="server_begin"></block>
    <block type="server_send">
      <field name="status code">200</field>
    </block>
    <block type="server_handle_client"></block>
    <block type="wifi_status"></block>
    <block type="wifi_local_ip"></block>
    <block type="wifi_wl_connected"></block>
    <block type="server_has_argument">
      <field name="arg">argument</field>
    </block>
    <block type="server_argument">
      <field name="arg">argument</field>
    </block>
    <block type="server_argument_to_int"></block>
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