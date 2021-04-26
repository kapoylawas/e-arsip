<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              <?php 
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                  <ul>
                  <?php foreach ($errors as $key => $value) { ?>
                      <li> <?= esc($value) ?> </li>
                <?php } ?>
                </ul>
                </div> 
              <?php } ?>

                  <?php echo form_open_multipart('user/insert'); ?>

                  <div class="form-group">
                    <label>Nama user </label>
                    <input name="nama_user" class="form-control" placeholder="Nama User" >
                  </div>
                  <div class="form-group">
                    <label>Email </label>
                    <input name="email" class="form-control" placeholder="Email" >
                  </div>
                  <div class="form-group">
                    <label>Password </label>
                    <input name="password" class="form-control" placeholder="Password" >
                  </div>
                  <div class="form-group">
                    <label>Level </label>
                    <select name="level" class="form-control">
                    <option value="">--Pilih Level--</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Departement</label>
                    <select name="id_dep" class="form-control">
                    <option value="">--Pilih Departement--</option>
                    <?php foreach ($dep as $key => $value) { ?>
                        <option value="<?= $value['id_dep'] ?>"><?= $value['nama_dep'] ?></option>
                    <?php } ?>
                    <!-- <option value="1">Admin</option> -->
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Foto </label>
                    <input type="file" name="foto" class="form-control">
                  </div>
                  <div class="form-group float-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('user') ?>" class="btn btn-warning">kembali</a>
                  </div>

                  <?php echo form_close('') ?>

        </div>
    <!-- /.card -->
    </div>
   <!-- /.col -->
  </div>
  <div class="col-md-2">
</div>
</div>