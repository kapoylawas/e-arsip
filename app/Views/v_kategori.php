<div class="row">
<div class="container">
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#tambah">
                  <i class="fas fa-plus"> Tambah Data</i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <?php 
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success - ';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                }
              ?>

              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                       <tr>
                         <th width="80px"> No </th>
                         <th> Kategori </th>
                         <th width="100px"> Action </th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                         foreach ($kategori as $key => $value) { ?>
                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td> <?= $value['nama_kategori']; ?> </td>
                                <td class="text-center"> 
                                    <button class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#edit<?= $value['id_kategori']; ?>">Edit</button>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_kategori']; ?>">Hapus</button>
                                </td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>
</div>

  <!-- /.modal tambah kategori -->
<div class="modal fade" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open('kategori/tambah')
              ?>

                  <div class="form-group">
                    <label>Kategori</label>
                    <input name="nama_kategori" class="form-control" placeholder="Kategori" required>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- /.modal edit kategori -->
<?php foreach ($kategori as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value['id_kategori']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open('kategori/edit/' . $value['id_kategori'])
              ?>

                  <div class="form-group">
                    <label>Kategori</label>
                    <input name="nama_kategori" value="<?= $value['nama_kategori']; ?>" class="form-control" placeholder="Kategori" required>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
</div>  
<?php } ?>

<!-- /.modal hapus kategori -->
<?php foreach ($kategori as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_kategori']; ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
            Apakah Anda Hapus <?= $value['nama_kategori']; ?>..?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
              <a href="<?= base_url('kategori/delete/' . $value['id_kategori']) ?>" type="submit" class="btn btn-default">YA</a>
            </div>
  
          </div>
          <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
</div>  
<?php } ?>    
    