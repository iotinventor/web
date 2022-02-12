<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>My Publications</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <p class="fs-5 fw-bold">My All Publications</p>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <a class="btn btn-outline-secondary" href="<?= site_url('project'); ?>">Back</a>  
      </div>
      <div class="col-md-4">
        <form action="<?= site_url('publication/all'); ?>">
          <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search ..."  aria-describedby="button-addon2">
            <button type="submit" class="btn btn-secondary" type="button" id="button-addon2">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mb-4 mt-2">
    <div class="row">
      <?php if ($publications): ?>
        <?php foreach ($publications as $publication): ?>
          <div class="col-md-3 my-3">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title text-truncate"><?= $publication->title ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  <span class=""><?= ucfirst($publication->display_name) ?> </span>
                  <br />
                  <small><?= date("D, d M Y", strtotime($publication->created)); ?></small>
                  <br />
                  <small><?= $publication->publisher ?></small>
                </h6>
                <p></p>
                <p class="text-truncate">
                  <small ><?= $publication->description ?></small>
                </p>
                <a href="<?= site_url('publication/clone/' . $publication->id) ?>" class="btn btn-primary">
                  Clone
                </a>
                <?php if ($publication->link_tutorial !== NULL): ?>
                <a target="_blank" href="<?= $publication->link_tutorial ?>" class="btn btn-outline-primary">
                  Tutorial
                </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif; ?>
      <nav class="mt-4" aria-label="Page navigation example">
        <?= $pagination; ?>
      </nav>
    </div>
  </div>
</body>
</html>
