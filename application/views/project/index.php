<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>Project Saya</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  
  
  <?php $this->load->view("project/components/header.php"); ?>
  <?php $this->load->view("project/components/action.php"); ?>

  <div class="container mb-4 mt-2">
    <div class="row">
      <?php if ($projects): ?>
        <?php foreach ($projects as $project): ?>
          <div class="col-md-3 my-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-truncate">
                  <i class="bi bi-code-square"></i>
                  <?= $project->title ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted ">
                  <span class=""><?= ucfirst($project->display_name) ?> </span>
                </h6>
                <p><small>Tanggal <?= date("D, d M Y", strtotime($project->created)); ?></small></p>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear-fill"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?= site_url('project/editor/' . $project->id) ?>" class="dropdown-item">Open</a>
                    </li>
                    <li>
                      <a href="<?= site_url('project/edit/' . $project->id) ?>" class="dropdown-item">Edit</a>
                    </li>
                    <li>
                      <a href="<?= site_url('publication/publish/' . $project->id); ?>" class="dropdown-item">
                        Publish 
                      </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a href="<?= site_url('project/delete/' . $project->id) ?>" class="dropdown-item">Delete</a>
                    </li>
                  </ul>
                </div>
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
