<div class="row">
<div class="container">
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Departement</h3>

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
                         foreach ($dep as $key => $value) { ?>
                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td> <?= $value['nama_dep']; ?> </td>
                                <td class="text-center"> 
                                    <button class="btn btn-sm btn-warning"  data-toggle="modal" data-target="#edit<?= $value['id_dep']; ?>">Edit</button>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_dep']; ?>">Hapus</button>
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

  <!-- /.modal tambah dep -->
<div class="modal fade" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit departement</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open('departement/tambah')
              ?>

                  <div class="form-group">
                    <label>Departement</label>
                    <input name="nama_dep" class="form-control" placeholder="Departement" required>
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

<!-- /.modal edit dep -->
<?php foreach ($dep as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value['id_dep']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Departement</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open('departement/edit/' . $value['id_dep'])
              ?>

                  <div class="form-group">
                    <label>Departement</label>
                    <input name="nama_dep" value="<?= $value['nama_dep']; ?>" class="form-control" placeholder="departement" required>
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

<!-- /.modal hapus dep -->
<?php foreach ($dep as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_dep']; ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Departement</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
            Apakah Anda Hapus <?= $value['nama_dep']; ?>..?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
              <a href="<?= base_url('departement/delete/' . $value['id_dep']) ?>" type="submit" class="btn btn-default">YA</a>
            </div>
  
          </div>
          <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
</div>  
<?php } ?>    
    