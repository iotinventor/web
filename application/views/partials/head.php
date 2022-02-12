<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?= base_url('assets/bootstrap5/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php if ( $controller == "app" ): ?>
  
  <script type="text/javascript" src="<?php echo base_url('assets/blockly/blockly/blockly_compressed.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/blockly/blockly/blocks_compressed.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/blockly/blockly/arduino_compressed.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/blockly/blockly/msg/js/en.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/blockly/FileSaver.min.js') ?>"></script>
  <link rel="stylesheet" href="<?= base_url('assets/blockly/style.css'); ?>">
<?php endif; ?>