<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#Tambah_barang" ><i class="fas fa-plus fa-sm"></i>Tambah Blog</button>

    <table class="table table-bordered">
    <tr>
    <td>No</td>
    <th>Nama Blog</th>
    <th>Keterangan Blog</th>
    <th>Kategori Blog</th>
    <th colspan="3">Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach($blog as $blg) : ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $blg->nama_blog ?></td>
        <td><?php echo $blg->keterangan_blog ?></td>
        <td><?php echo $blg->kategori_blog ?></td>

        <td><div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></div></td>
        <td><?php echo anchor('Admin/Data_blog/edit/' .$blg->id_blog,'<div class="btn btn-success btn-sm"></i><i class="fa fa-edit"></i></div>')?></td>

        <td><?php echo anchor('Admin/Data_blog/hapus/' .$blg->id_blog,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
        </tr>

    <?php endforeach;?>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="Tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'Admin/Data_blog/tambah_aksi'?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
            <label>Nama Blog</label>
            <input type="text" name="nama_blog" class="form-control">
            </div>

            <div class="form-group">
            <label>Keterangan Blog</label>
            <input type="text" name="keterangan_blog" class="form-control">
            </div>

            <div class="form-group">
            <label>Kategori Blog</label>
            <select class="form-control" name="kategori_blog">
              <option>Resep</option>
              <option>Info</option>
            </select>
            </div>


            <div class="form-group">
            <label>Gambar Blog</label><br>
            <input type="file" name="gambar_blog" class="form-control">
            </div>





      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
      </form>

    </div>
  </div>
</div>