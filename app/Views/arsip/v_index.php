<div class="row">
<div class="container">
<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Arsip</h3>

                <div class="card-tools">
                  <a href="<?= base_url('arsip/add') ?>" class="btn btn-warning btn-sm">
                  <i class="fas fa-plus"> Tambah Data</i>
                  </a>
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
                         <th > No </th>
                         <th> No Arsip </th>
                         <th> Nama Arsip </th>
                         <th> Kategori </th>
                         <th> Upload </th>
                         <th> Update </th>
                         <th> User </th>
                         <th> Departement </th>
                         <th> File </th>
                         <th width="100px"> Action </th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                         foreach ($arsip as $key => $value) { ?>
                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td> <?= $value['no_arsip']; ?> </td>
                                <td> <?= $value['nama_arsip']; ?> </td>
                                <td> <?= $value['nama_kategori']; ?> </td>
                                <td> <?= $value['tgl_upload']; ?> </td>
                                <td> <?= $value['tgl_update']; ?> </td>
                                <td> <?= $value['nama_user']; ?> </td>
                                <td> <?= $value['nama_dep']; ?> </td>
                                <td class="text-center">  
                                <a href="<?= base_url('arsip/viewpdf/' . $value['id_arsip'])?>"><i class="fa fa-file-pdf fa-2x label-danger"></i></a>
                                <br><?= number_format ($value['ukuran_file'], 0) ?> Byte
                                </td>
                        
                                <td class="text-center"> 
                               
                                <a href="<?= base_url('arsip/edit/' . $value['id_arsip'])?>" class="btn btn-sm btn-warning">Edit</a>
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_arsip']; ?>">Hapus</button>
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

<!-- /.modal hapus user -->
<?php foreach ($arsip as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_arsip']; ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Hapus User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
            Apakah Anda Hapus User <b><?= $value['nama_arsip']; ?></b>..?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
              <a href="<?= base_url('arsip/delete/' . $value['id_arsip']) ?>" type="submit" class="btn btn-default">YA</a>
            </div>
  
          </div>
          <!-- /.modal-content -->
      </div>
    <!-- /.modal-dialog -->
</div>  
<?php } ?>    