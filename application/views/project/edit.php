<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>Edit Project</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Edit <?= $project->title ?></h5>
            <form action="" method="post">
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="<?= $project->title ?>" id="exampleFormControlInput1" placeholder="<?= $project->title ?>">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="<?= site_url('project'); ?>" class="btn btn-light" type="submit" >Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
