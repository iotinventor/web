<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/features/signin/signin.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Sign Out</title>
</head>
<body class="text-center">
  
  <main class="form-signin">
    <form method="post" action="<?= site_url('auth/signout'); ?>">
      <i class="bi bi-door-closed fs-1"></i>
      <h1 class="h3 mb-3 fs-5 fw-normal">Kamu yakin mau keluar nih! Pastiin lagi yah...</h1>
      <a class="w-100 btn btn-primary mb-2" href="<?= site_url('dashboard'); ?>">Enggak Deh</a>
      <button class="w-100 btn btn-outline-primary" type="submit">Ya</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022 IoTJunior</p>
    </form>
  </main>
  <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>
</body>
</html>