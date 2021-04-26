<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Arsip</h3>
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

                  <?php echo form_open_multipart('arsip/insert');
                  helper('text');
                  $no_arsip = date('ymds'). '-' . random_string('alnum', 4);
                  ?>

                  <div class="form-group">
                    <label>No Arsip </label>
                    <input name="no_arsip" class="form-control" value="<?= $no_arsip ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
                    <option value="">--Pilih Kategori--</option>
                    <?php foreach ($kategori as $key => $value) { ?>
                        <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                    <?php } ?>
                    <!-- <option value="1">Admin</option> -->
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Arsip </label>
                    <input name="nama_arsip" class="form-control" placeholder="Nama Arsip" >
                  </div>
                  <div class="form-group">
                    <label>Deskripsi </label>
                    <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label>File Arsip </label>
                    <input type="file" name="file_arsip" class="form-control">
                    <label class="text-danger">*File Harus Format .PDF</label>
                  </div>
                  <div class="form-group float-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('arsip') ?>" class="btn btn-warning">kembali</a>
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