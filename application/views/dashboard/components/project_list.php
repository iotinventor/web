<?php if (!empty($projects)): ?>
  <div class="row">
    <?php foreach ($projects as $project): ?>
      <div class="col-md-4 my-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-truncate">
              <i class="bi bi-file-earmark-code-fill"></i>
              <?= $project->title ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted ">
              <span class=""><?= ucfirst($project->display_name) ?> </span>
            </h6>
            <p><small>Tanggal <?= date("D, d M Y", strtotime($project->created)); ?></small></p>
            <div class="btn-group btn-sm">
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
  </div>
<?php endif; ?>

