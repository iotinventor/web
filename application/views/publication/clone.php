<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>Clone Publication</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title"><?= $publication->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <span class=""><?= ucfirst($publication->display_name) ?> </span>
              <br />
              <small><?= date("D, d M Y", strtotime($publication->created)); ?></small>
              <br>
              <small><?= $publication->publisher ?></small>
            </h6>
            <p></p>
            <p>
              <small ><?= $publication->description ?></small>
            </p>
            <form action="" method="POST" >
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="<?= $publication->title ?>">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Clone</button>
                <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-light">Back</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
