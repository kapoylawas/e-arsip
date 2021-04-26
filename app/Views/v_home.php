<div class="content-header">
      <div class="container">
        <div class="row mb-2">
        <div class="col-lg-3 col-12">
          <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $tot_arsip ?></h3>
                <p>Arsip</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-pdf"></i>
              </div>
              <a href="<?= base_url('arsip') ?>" class="small-box-footer">View Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

        <div class="col-lg-3 col-12">
          <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $tot_user ?></h3>
                <p>User</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="<?= base_url('user') ?>" class="small-box-footer">View Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

        <div class="col-lg-3 col-12">
          <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $tot_kategori ?></h3>
                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="fas fa-gopuram"></i>
              </div>
              <a href="<?= base_url('kategori') ?>" class="small-box-footer">View Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            
        <div class="col-lg-3 col-12">
          <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $tot_dep ?></h3>
                <p>Departement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bookmark"></i>
              </div>
              <a href="<?= base_url('departement') ?>" class="small-box-footer">View Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->