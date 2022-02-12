<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>IoTJunior</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container mt-5 mb-3">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <h1 class="display-6 text-center mb-3">IoT Junior</h1>
        <p class="fs-small text-center">
          Platform edukasi Internet of Thing untuk anak-anak
        </p>
      </div>
    </div>
  </div>

  <div class="container mt-2">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <form action="<?= site_url('home'); ?>">
          <div class="input-group mb-3 shadow-sm">
            <input type="text" name="search" class="form-control border-secondary" placeholder="Cari publikasi..."  aria-describedby="button-addon2">
            <button type="submit" class="btn btn-secondary" type="button" id="button-addon2">Cari</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mb-4 mt-2">
    <div class="row">
      <?php if ($publications): ?>
        <?php foreach ($publications as $publication): ?>
          <div class="col-md-4 my-3">
          <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-truncate mb-3">
                  <i class="bi bi-journal-code"></i>
                  <?= $publication->title ?> 
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  <span class=""><?= ucfirst($publication->display_name) ?> </span>
                  <br />
                  <small><?= date("D, d M Y", strtotime($publication->created)); ?></small>
                  <br>
                  <small><?= $publication->publisher ?></small>
                </h6>
                <p></p>
                <p class="text-truncate">
                  <small ><?= $publication->description ?></small>
                </p>
                <?php if ($this->session->userdata("is_authenticated")): ?>
                <a href="<?= site_url('publication/clone/' . $publication->id) ?>" class="btn btn-sm btn-primary">
                  Clone
                </a>
                <?php endif; ?>
                <?php if (!$this->session->userdata("is_authenticated")): ?>
                <a href="#" class="btn btn-sm btn-primary disabled">
                  Clone
                </a>
                <?php endif; ?>
                <?php if ($publication->link_tutorial !== NULL): ?>
                <a target="_blank" href="<?= $publication->link_tutorial ?>" class="btn btn-sm btn-primary">
                  Tutorial
                </a>
                <?php endif; ?>
                <?php if ($publication->link_tutorial === NULL): ?>
                <button title="This project does not have a tutorial!" class="btn btn-sm btn-primary disabled">
                  Tutorial
                </button>
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
