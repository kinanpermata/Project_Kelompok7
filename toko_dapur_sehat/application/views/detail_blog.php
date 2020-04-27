<div class="container-fluid">

    <div class="card">
    <div class="card-header">Mommy, You Know?</div>
    </div>
    <div class="card-body">

        <?php foreach($blog as $blg): ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url().'/uploads/'.$blg->gambar_blog ?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td>Judul Blog</td>
                        <td><strong><?php echo $blg->nama_blog ?></strong></td>
                    </tr>

                    <tr>
                        <td>Keterangan</td>
                        <td><strong><?php echo $blg->keterangan_blog ?></strong></td>
                    </tr>

                    <tr>
                        <td>Kategori</td>
                        <td><strong><?php echo $blg->kategori_blog ?></strong></td>
                    </tr>

                </table>

                <?php echo anchor('Dashboard/dashboard_blog/' .$blg->id_blog, '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
    </div>
</div>