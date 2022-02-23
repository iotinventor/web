<xml id="toolbox" style="display: none">
  <category name="Basic">
    <block type="on_start"></block>
    <block type="forever"></block>
    <block type="add_icon_to_screen">
      <field name="icon">heart</field>
    </block>
    <block type="add_to_screen">
      <field name="size">1</field>
      <value name="text">
        <block type="text">
          <field name="TEXT">text</field>
        </block>
      </value>
      <value name="x">
        <block type="math_number">
          <field name="NUM">0</field>
        </block>
      </value>
      <value name="y">
        <block type="math_number">
          <field name="NUM">0</field>
        </block>
      </value>
    </block>
    <block type="show_screen"></block>
    <block type="clear_screen"></block>
    <block type="pause">
      <field name="time">15</field>
    </block>
    <block type="add_arrow_to_screen">
      <field name="arrow">arrow_up</field>
    </block>
  </category>
  <category name="Input">
    <block type="on_button_pressed">
      <field name="pin">D4</field>
    </block>
    <block type="on_button_released">
      <field name="pin">D4</field>
    </block>
    <block type="on_pin_touch_down">
      <field name="pin">D0</field>
    </block>
    <block type="on_pin_touch_up">
      <field name="pin">D0</field>
    </block>
    <block type="on_motion_detected"></block>
    <block type="button_is_pressed">
      <field name="pin">D4</field>
    </block>
    <block type="pin_is_touched">
      <field name="pin">D4</field>
    </block>
    <block type="temperature_c"></block>
    <block type="humidity"></block>
    <block type="soil_moisture"></block>
    <block type="distance"></block>
  </category>
  <category name="Output">
    <block type="play_note">
      <field name="note">262</field>
      <field name="duration">100</field>
    </block>
    <block type="stop_note"></block>
    <block type="play_beep"></block>
    <block type="stop_beep"></block>
    <block type="turn_on_lamp"></block>
    <block type="turn_off_lamp"></block>
    <block type="lamp">
      <field name="brightness">0</field>
    </block>
  </category>
  <category name="Wireless">
    <block type="on_bluetooth_is_available"></block>
    <block type="on_wifi_try_to_connect"></block>
    <block type="on_wifi_is_connected"></block>
    <block type="on_server_called">
      <field name="path">path</field>
    </block>
    <block type="bluetooth_set_name">
      <field name="bluetooth name">home automation</field>
    </block>
    <block type="wifi_set_ssid_password">
      <field name="ssid">ssid</field>
      <field name="password">password</field>
    </block>
    <block type="bluetooth_send">
      <value name="data">
        <block type="text">
          <field name="TEXT">text</field>
        </block>
      </value>
    </block>
    <block type="server_send">
      <value name="data">
        <block type="text">
          <field name="TEXT">Ok</field>
        </block>
      </value>
    </block>
    <block type="server_has">
      <field name="param">param</field>
    </block>
    <block type="bluetooth_received">
      <field name="key">text</field>
    </block>
    <block type="local_ip"></block>
    <block type="wifi_still_connected"></block>
    <block type="server_get">
      <field name="param">param</field>
      <field name="convert">value()</field>
    </block>
    
  </category>
  <sep></sep>
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
    <!-- <block type="negate"></block> -->
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
    <!-- <block type="convert_number_to_string"></block>
    <block type="c_string"></block> -->
  </category>
  
  <category name="Variables" custom="VARIABLE"></category>
  <category name="Functions" custom="PROCEDURE"></category>
</xml>