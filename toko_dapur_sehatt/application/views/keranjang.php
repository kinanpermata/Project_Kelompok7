<div class="site-section ">
      <div class="container">
        <div class="row">
          <h2 class="site-section-heading text-center text-uppercase">Keranjang Belanja</h2>
        </div>

    <table class="table table-bordered table-striped table-hover">
    <tr align="center">
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Subtotal</th>
    </tr>

    <?php
    $no=1;
    foreach ($this->cart->contents() as $items) : ?>

        <tr>
            <td align="center"><?php echo $no++ ?></td>
            <td><?php echo $items['name'] ?></td>
            <td align="center"><?php echo $items['qty'] ?></td>
            <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
            <td align="right">Rp. <?php  echo number_format($items['subtotal'], 0,',','.')  ?></td>
        </tr>


    <?php endforeach;?>

    <tr>
    <td colspan="4"></td>
        <td align="right">Rp.<?php  echo number_format($this->cart->total(), 0,',','.')  ?> </td>
    </tr>
    </table>

    <div align="right">
    <a href="<?php echo base_url('Dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
    <a href="<?php echo base_url('Dashboard_akhir') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
    <a href="<?php echo base_url('Dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>

</div>
</div>