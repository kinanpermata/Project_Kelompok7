<div class="site-section ">
      <div class="container">
        <div class="row">
          <h2 class="site-section-heading text-center text-uppercase">Transaksi Anda</h2>
          <br>
        </div>

    <table class="table table-bordered table-striped table-hover">
    <tr align="center">
        <th>No</th>
        <th>Nama Pemesan</th>
        <th>Tanggal Transaksi</th>
        <th>Alamat Pengiriman</th>
        <th>Jasa Pengiriman</th>
        <th>Pembayaran</th>
        <th>Batas Bayar</th>
        <th>Action</th>
    </tr>

    <?php
    $no=1;
    foreach ($transaksi as $tr) : ?>

        <tr>
            <td align="center"><?php echo $no++ ?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo date('d/m/Y H:i:s', strtotime($tr->tgl_pesan)); ?></td>
            <td><?php echo $tr->alamat ?></td>
            <td><?php 
                    if($tr->jasa_pengiriman == "0"){
                        echo "JNE";
                    }else if($tr->jasa_pengiriman == "1"){
                        echo "Gojek";
                    }else{
                        echo "Grab";
                    }
                                                        
                ?></td>
            <td><?php 
                    if($tr->bank== "0"){
                        echo "BCA - 1234565432";
                    }else{
                        echo "OVO - 123455432";
                    }                           
                ?></td>
            <td><?php echo date('d/m/Y H:i:s', strtotime($tr->batas_bayar)); ?></td>
            <td><?php echo anchor('Dashboard/detail_transaksi/'.$tr->id, '<div class="btn btn-success text-white px-2">Detail</div>') ?></td>
        </tr>
    <?php endforeach;?>
    </table>

    <div align="right">
    <a href="<?php echo base_url('Dashboard_akhir') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
    </div>

</div>
</div>