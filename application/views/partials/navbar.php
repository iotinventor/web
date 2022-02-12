<nav class="navbar navbar-expand-lg shadow navbar-dark bg-dark border-bottom border-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?= site_url(''); ?>">
      <span class="fw-bold">
        <i class="bi bi-cpu-fill"></i> IoTInventor
      </span>
      <span class="fw-light fs-6">App</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if ( empty($this->session->userdata('is_authenticated')) ): ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('auth'); ?>">Sign In</a>
        </li>
        <?php endif ?>
        <?php if ( !empty($this->session->userdata('first_name')) ): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
              <li><a class="dropdown-item" href="<?= site_url('project/list'); ?>">My Projects</a></li>
              <li><a class="dropdown-item" href="<?= site_url('publication/list'); ?>">My Publication</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= site_url(''); ?>">Community</a></li>
              <li><a class="dropdown-item" target="_blank" href="<?= site_url('webserial'); ?>">Web Serial</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= site_url('auth/signout'); ?>">Sign Out</a></li>
            </ul>
          </li>
        <?php endif ?>
        <?php if ( $controller === "app" ): ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <?= $project->title ?> <i class="bi bi-cpu"></i> <?= $project->board_name ?>
          </a>
        </li>
        <?php endif ?>
      </ul>
      <div class="d-flex">
        <?php if ( $controller === 'project' || $controller === "dashboard" ): ?>
          <button class="btn btn-light fw-bold" data-bs-toggle="modal" data-bs-target="#modalCreateProject">
            <i class="bi bi-plus-circle-fill"></i> New Project
          </button>
        <?php endif; ?>
        <?php if ( $controller === 'webserial' ): ?>
          <button class="btn btn-outline-secondary fw-bold" >Refresh</button>
          &nbsp;
          &nbsp;
          <button class="btn btn-primary fw-bold" id="openSerial">Open Serial</button>
        <?php endif; ?>
        <?php if ( $controller === 'app' ): ?>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="<?= site_url('project'); ?>" class="btn btn-secondary text-light">
              <i class="bi bi-x-circle"></i> Close
            </a>
            <button type="button" title="Connect" class="btn btn-light fw-bold" id="linkConnect">
            <i class="bi bi-app-indicator"></i> Connect
            </button>
            <button id="linkSave" onclick="save()" type="button" class="btn btn-light fw-bold">
              <i class="bi bi-cloud-download-fill"></i> Save
            </button>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<?php if ( !empty($this->session->userdata('is_authenticated')) ): ?>
<div class="modal fade" id="modalCreateProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= site_url("project/create"); ?>" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="My ESP32 Project">
          </div>
          <div class="mb-3">
            <a class="btn btn-outline-light btn-sm text-secondary" data-bs-toggle="collapse" href="#boardOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-caret-right-fill"></i> Board options
            </a>
          </div>
          <div class="collapse" id="boardOptions">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Board</label>
              <select name="board_id" class="form-select" aria-label="Default select example">
                <?php foreach ($boards as $board): ?>
                <option <?php if (!$board->is_active): ?> disabled="" <?php endif ?> value="<?= $board->id ?>">
                  <?= $board->display_name ?> <?php if (!$board->is_active): ?> (on progress) <?php endif ?> 
                </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-dark">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>