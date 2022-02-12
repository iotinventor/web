<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view("partials/commons/head.php") ?>
</head>
<body>
  
<?php $this->load->view("partials/commons/navbar") ?>
</body>
</html>



<html manifest=node.manifest>
<head>
  <meta charset="utf-8">
  <title>RiverLabs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script src="/socket.io/socket.io.js"></script>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

  <script type="text/javascript" src="blockly/blockly_compressed.js"></script>
  <script type="text/javascript" src="blockly/blocks_compressed.js"></script>
  <script type="text/javascript" src="blockly/arduino_compressed.js"></script>
  <script type="text/javascript" src="blockly/msg/js/en.js"></script>
  <script type="text/javascript" src="FileSaver.min.js"></script>
  
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <table>
    <tr>
      <td>
        <%- include('../partials/commons/navbar') %>
      </td>
    </tr>
    <tr>
      <td id="blocklyArea">
      </td>
    </tr>
  </table>
  <div id="blocklyDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <category name="Core">
      <block type="setup"></block>
      <block type="forever"></block>
      <block type="core_pin_mode">
        <field name="NAME">INPUT</field>
      </block>
      <block type="core_digital_write"></block>
      <block type="core_pwm_setup"></block>
      <block type="core_pwm_attach_pin"></block>
      <block type="core_pwm_write"></block>
      <block type="core_analog_read"></block>
      <block type="core_digital_read"></block>
      <block type="core_state">
        <field name="state">HIGH</field>
      </block>
      <block type="core_millis_interval">
        <value name="interval">
          <block type="math_number">
            <field name="NUM">1000</field>
          </block>
        </value>
      </block>
    </category>
    <category name="Screen">
      <block type="screen_setup"></block>
      <block type="screen_cleardisplay"></block>
      <block type="screen_settextsize"></block>
      <block type="screen_settextcolor">
        <field name="color">WHITE</field>
      </block>
      <block type="screen_settextcursor"></block>
      <block type="screen_println"></block>
      <block type="screen_print"></block>
      <block type="screen_display"></block>
    </category>
    <category name="Basic" colour="230">
      <block type="display_setup"></block>
      <block type="basic_show_screen">
        <field name="fontsize">1</field>
        <value name="data">
          <block type="text">
            <field name="TEXT">Hello RiverLabs</field>
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
      <block type="basic_show_animation_screen">
        <field name="fontsize">1</field>
        <value name="data">
          <block type="text">
            <field name="TEXT">Hello RiverLabs</field>
          </block>
        </value>
      </block>
      <block type="basic_pause">
        <value name="time">
          <block type="math_number">
            <field name="NUM">1000</field>
          </block>
        </value>
      </block>
      <block type="basic_show_icon">
        <field name="icon">cats</field>
        <field name="flash">TRUE</field>
      </block>
      <block type="basic_show_screens_statements">
        <field name="fontsize">1</field>
        <value name="data">
          <block type="text">
            <field name="TEXT">This continue text</field>
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
      <block type="basic_show_screens"></block>
    </category>
    <category name="Input">
      <block type="input_pin_pressed">
        <field name="pin">4</field>
      </block>
      <block type="input_pin_touched">
        <field name="pin">4</field>
      </block>
      <block type="input_pin_is_pressed">
        <field name="pin">4</field>
      </block>
      <block type="input_pin_is_touched">
        <field name="pin">15</field>
      </block>
      <block type="input_dht11_temperature"></block>
      <block type="input_dht11_humidity"></block>
    </category>
    <category name="Led">
      <block type="led_turn_led">
        <field name="pin">4</field>
        <field name="state">HIGH</field>
      </block>
      <block type="led_turn_setup_brigntness">
        <field name="pin">5</field>
      </block>
      <block type="led_turn_led_brightness"></block>
    </category>
    <category name="Bluetooth" colour="230">
      <block type="bluetooth_set_name">
        <value name="name">
          <block type="text">
            <field name="TEXT">MyBluetooth</field>
          </block>
        </value>
      </block>
      <block type="bluetooth_received_string">
        <value name="string">
          <block type="text">
            <field name="TEXT">string</field>
          </block>
        </value>
      </block>
      <block type="bluetooth_received_number">
        <value name="string">
          <block type="math_number">
            <field name="NUM">65</field>
          </block>
        </value>
      </block>
      <block type="bluetooth_send_string">
        <value name="string">
          <block type="text">
            <field name="TEXT">string</field>
          </block>
        </value>
      </block>
      <block type="bluetooth_send_number">
        <value name="number">
          <block type="math_number">
            <field name="NUM">0</field>
          </block>
        </value>
      </block>
    </category>
    <category name="WiFi">
      <block type="wifi_set_wifi_ssid_password">
        <value name="ssid">
          <block type="text">
            <field name="TEXT">wifi name</field>
          </block>
        </value>
        <value name="password">
          <block type="text">
            <field name="TEXT">password</field>
          </block>
        </value>
      </block>
      <block type="wifi_on_connected"></block>
      <block type="wifi_is_path_called">
        <value name="path">
          <block type="text">
            <field name="TEXT">path</field>
          </block>
        </value>
      </block>
      <block type="wifi_send_value">
        <value name="path">
          <block type="text">
            <field name="TEXT">done</field>
          </block>
        </value>
      </block>
    </category>
    <category name="Motor">
      <block type="servo_set_pin">
        <field name="pin">1</field>
        <value name="degree">
          <block type="math_number">
            <field name="NUM">0</field>
          </block>
        </value>
      </block>
      <block type="servo_turn_by">
        <field name="pin">1</field>
        <value name="degree">
          <block type="math_number">
            <field name="NUM">90</field>
          </block>
        </value>
      </block>
    </category>
    <sep css-container="separator"></sep>

    <category css-icon="customIcon fa fa-cog" name="Logic">
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

  <%- include('../partials/commons/modal') %>
  <script>var socket = io();</script>
  <script src="global.js"></script>
  <script src="qrcodescanner.js"></script>
  <script type="text/javascript" src="blockly_helper.js"></script>
  <script src="blockly/blocks/base.js"></script>
  <script src="blockly/blocks/colour.js"></script>
  <script src="blockly/blocks/grove.js"></script>
  <script src="blockly/blocks/lists.js"></script>
  <script src="blockly/blocks/logic.js"></script>
  <script src="blockly/blocks/loops.js"></script>
  <script src="blockly/blocks/math.js"></script>
  <script src="blockly/blocks/procedures.js"></script>
  <script src="blockly/blocks/text.js"></script>
  <script src="blockly/blocks/variables.js"></script>
  <script src="blockly/blocks/basic_definitions.js"></script>
  <script src="blockly/blocks/bluetooth_definitions.js"></script>

  <script src="blockly/blocks/dcore.js"></script>
  <script src="blockly/blocks/dscreen.js"></script>

  <script src="blockly/blocks/dbasic.js"></script>
  <script src="blockly/blocks/dinput.js"></script>
  <script src="blockly/blocks/dled.js"></script>
  <script src="blockly/blocks/dbluetooth.js"></script>
  <script src="blockly/blocks/dmotor.js"></script>

  <script src="blockly/generators/arduino/gcore.js"></script>
  <script src="blockly/generators/arduino/gscreen.js"></script>

  <script src="blockly/generators/arduino/base.js"></script>
  <script src="blockly/generators/arduino/control.js"></script>
  <script src="blockly/generators/arduino/grove.js"></script>
  <script src="blockly/generators/arduino/logic.js"></script>
  <script src="blockly/generators/arduino/math.js"></script>
  <script src="blockly/generators/arduino/procedures.js"></script>
  <script src="blockly/generators/arduino/text.js"></script>
  <script src="blockly/generators/arduino/variables.js"></script>
  <script src="blockly/generators/arduino/basic_generators.js"></script>
  <script src="blockly/generators/arduino/bluetooth_generators.js"></script>

  <script src="blockly/generators/arduino/gbasic.js"></script>
  <script src="blockly/generators/arduino/ginput.js"></script>
  <script src="blockly/generators/arduino/gled.js"></script>
  <script src="blockly/generators/arduino/gbluetooth.js"></script>
  <script src="blockly/generators/arduino/gmotor.js"></script>
</body>
</html>
