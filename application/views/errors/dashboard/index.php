<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>My Projects</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container mt-4">
    <div class="col-md-4"> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hi, <?= $this->session->userdata("first_name"); ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-8"></div>
  </div>
</body>
</html>
