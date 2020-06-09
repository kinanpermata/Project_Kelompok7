<div class="site-section ">
      <div class="container">
        <div class="row">
          <h2 class="site-section-heading text-center text-uppercase">Transaksi Anda</h2>
          <br>
        </div>

    <table class="table table-bordered table-striped table-hover">
    <tr align="center">
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Harga Barang</th>
    </tr>

    <?php
    $no=1;
    foreach ($transaksi as $tr) : ?>
        <tr>
            <td align="center"><?php echo $no++ ?></td>
            <td><?php echo $tr->nama_brg ?></td>
            <td><?php echo $tr->jumlah ?></td>
            <td align="right">Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
        </tr>
        
    <?php endforeach;?>
    </table>

    <div align="right">
    <a href="<?php echo base_url('Dashboard/transaksi') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    </div>

</div>
</div>