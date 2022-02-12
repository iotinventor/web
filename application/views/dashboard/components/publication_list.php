<div class="row">
  <?php if (!empty($publications)): ?>
    <?php foreach ($publications as $publication): ?>
      <div class="col-md-6 my-3">
      <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-truncate"><?= $publication->title ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <span class=""><?= ucfirst($publication->display_name) ?> </span>
              <br />
              <small><?= date("D, d M Y", strtotime($publication->created)); ?></small>
              <br>
              <small><?= $publication->publisher ?></small>
            </h6>
            <p class="text-truncate">
              <small ><?= $publication->description ?></small>
            </p>
            <a href="<?= site_url('publication/clone/' . $publication->id) ?>" class="btn btn-sm btn-primary">
              Clone
            </a>
            <?php if ($publication->link_tutorial !== NULL): ?>
            <a target="_blank" href="<?= $publication->link_tutorial ?>" class="btn btn-sm btn-primary">
              Tutorial
            </a>
            <?php endif; ?>
            <?php if ($publication->link_tutorial === NULL): ?>
            <a target="#" href="<?= $publication->link_tutorial ?>" class="btn btn-sm btn-secondary disabled">
              Tutorial
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  <?php endif; ?>
</div>