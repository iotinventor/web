<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>All Publications</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <?php $this->load->view("publication/components/header.php"); ?>
  <?php $this->load->view("publication/components/action.php"); ?>
  
  <div class="container mb-4 mt-2">
    <div class="row">
      <?php if ($publications): ?>
        <?php foreach ($publications as $publication): ?>
          <div class="col-md-3 my-3">
          <div class="card shadow-sm border-dark">
              <div class="card-body">
                <h5 class="card-title text-truncate">
                  <?= $publication->title ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  <span class=""><?= ucfirst($publication->display_name) ?> </span>
                  <br />
                  <small><?= date("D, d M Y", strtotime($publication->created)); ?></small>
                  <br>
                  <small>
                    <span class="badge bg-secondary">published by <?= $publication->publisher ?></span>
                  </small>
                </h6>
                <p></p>
                <p class="text-truncate">
                  <small ><?= $publication->description ?></small>
                </p>
                <a href="<?= site_url('publication/clone/' . $publication->id) ?>" class="btn btn-sm btn-dark">
                  Clone
                </a>
                <?php if ($publication->link_tutorial !== NULL): ?>
                <a target="_blank" href="<?= $publication->link_tutorial ?>" class="btn btn-sm btn-dark">
                  Tutorial
                </a>
                <?php endif; ?>
                <?php if ($publication->link_tutorial === NULL): ?>
                <a href="#" class="btn btn-sm btn-dark disabled">
                  Tutorial
                </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif; ?>

      <?php if ( empty($publications) ): ?>
        <div class="col-md-12 mt-5">
          <img width="500" src="<?= site_url('assets/images/mypublications.png'); ?>" class="img-fluid mx-auto d-block" alt="">
        </div>
      <?php endif; ?>
      <nav class="mt-4" aria-label="Page navigation example">
        <?= $pagination; ?>
      </nav>
    </div>
  </div>
</body>
</html>
