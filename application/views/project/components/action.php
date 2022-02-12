<div class="container mt-4">
  <div class="row">
    <div class="col-md-8">
      <a class="btn btn-outline-secondary" href="<?= site_url('dashboard'); ?>">Dashboard</a>  
    </div>
    <div class="col-md-4">
      <form action="<?= site_url('project'); ?>">
        <div class="input-group mb-3">
          <input type="text" name="search" class="form-control" placeholder="Search my projects ..."  aria-describedby="button-addon2">
          <button type="submit" class="btn btn-secondary" type="button" id="button-addon2">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>