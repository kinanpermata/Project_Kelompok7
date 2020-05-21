<div class="container-fluid">
    <h3>Edit Data Blog</h3>

    <?php foreach($blog as $blg) : ?>
        <form method="post" action="<?php echo base_url().'Admin/Data_blog/update' ?>">

        <div class="form-group">
            <label>Nama Blog</label>
            <input type="text" name="nama_blog" class="form-control" value="<?php echo $blg->nama_blog?>">
        </div>

        
        <div class="form-group">
            <label>Keterangan Blog</label>
            <input type="hidden" name="id_brg" class="form-control" value="<?php echo $blg->id_blog?>">
            <input type="text" name="keterangan_blog" class="form-control" value="<?php echo $blg->keterangan_blog?>">
        </div>

        <div class="form-group">
            <label>Kategori Blog</label>
            <input type="text" name="kategori_blog" class="form-control" value="<?php echo $blg->kategori_blog?>">
        </div>


        <button type="submit" class="btn btn-danger btn-sm">Batalkan</button>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    <?php endforeach; ?> 
</div>