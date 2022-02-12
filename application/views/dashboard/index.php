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
    <div class="row"></div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3"> 
        <div class="card shadow-sm">
          <img src="<?= site_url('/assets/images/user-placeholder.png'); ?>" class="card-img-top">
          <div class="card-body ">
            <h5 class="card-title">Hi, <?= $this->session->userdata("first_name"); ?></h5>
            <p><small><?= $this->session->userdata("email"); ?></small></p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <h4 class="fw-bold">Project terbaru saya</h4>
        <?php if (!empty($projects)): ?>
        
        <?php $this->load->view("dashboard/components/project_list.php"); ?>
        <?php endif; ?>
        <?php if (empty($projects)): ?>
          <?php $this->load->view("dashboard/components/empty.php"); ?>
        <?php endif; ?>
        <?php if (!empty($publications)): ?>
          <h4 class="fw-bold mt-4">Publikasi terbaru saya</h4>
          <?php $this->load->view("dashboard/components/publication_list.php"); ?>
       <?php endif; ?>
       <?php if (empty($publications)): ?>
          <h4 class="fw-bold mt-4">Publikasi terbaru saya</h4>
          <?php $this->load->view("dashboard/components/empty.php"); ?>
       <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
