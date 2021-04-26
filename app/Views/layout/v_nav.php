<div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('kategori') ?>" class="nav-link">Kategori</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('departement') ?>" class="nav-link">Departemen</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('arsip') ?>" class="nav-link">Arsip</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link">User</a>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            <!-- <span class="badge badge-warning navbar-badge">15</span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item">
              <i class="fas fa-user mr-2"></i> <?= session()->get('nama_user') ?> | <?php if (session()->get('level')== 1) {
                echo 'Admin';
              }else {
                echo 'User';
              } ?>
            </a>
            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout 
            </a>
            <div class="dropdown-divider"></div>
            <!-- <i class="fas fa-sign-out-alt"></i> -->
            <a href="#" class="dropdown-item dropdown-footer"></a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?= $tittle ?> <small> </small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    