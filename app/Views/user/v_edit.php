<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
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

                  <?php echo form_open_multipart('user/update/' . $user_edit['id_user']); ?>

                  <div class="form-group">
                    <label>Nama user </label>
                    <input name="nama_user" value="<?= $user_edit['nama_user'] ?>" class="form-control" placeholder="Nama User" >
                  </div>
                  <div class="form-group">
                    <label>Email </label>
                    <input name="email" value="<?= $user_edit['email'] ?>" class="form-control" placeholder="Email" readonly >
                  </div>
                  <div class="form-group">
                    <label>Password </label>
                    <input name="password" value="<?= $user_edit['password'] ?>" class="form-control" placeholder="Password" >
                  </div>
                  <div class="form-group">
                    <label>Level </label>
                    <select name="level" class="form-control">
                    <option value="<?= $user_edit['level'] ?>"><?php if ($user_edit['level']==1) {
                        echo 'Admin';
                    }else{
                        echo 'User';
                    } ?></option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Departement</label>
                    <select name="id_dep" class="form-control">
                    <option value="<?= $user_edit['id_dep'] ?>"><?= $user_edit['nama_dep'] ?></option>
                    <?php foreach ($dep as $key => $value) { ?>
                        <option value="<?= $value['id_dep'] ?>"><?= $value['nama_dep'] ?></option>
                    <?php } ?>
                    <option value="1">Admin</option>
                    </select>
                  </div>
                  

                  <div class="row">
                    <div class="col-sm-6"> 
                        <img src="<?= base_url('foto/' . $user_edit['foto']) ?>" width="90px">
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Foto </label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="form-group float-right">
                    <button type="submit" class="btn btn-success">Update</button>
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