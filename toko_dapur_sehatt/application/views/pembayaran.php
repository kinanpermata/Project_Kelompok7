<!-- <div class="site-section ">
      <div class="container">
        <div class="row">
          <h2 class="site-section-heading text-center text-uppercase">Keranjang Belanja</h2>
        </div> -->
<div class="container"><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <h3>Input Alamat Pengiriman dan Pembayaran</h3><br>
            <div class="btn btn-sm btn-success">
            <?php $grand_total = 0;
            if($keranjang = $this->cart->contents()){
                foreach ($keranjang as $item){
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
             ?>
            </div><br><br>
            <form method="POST" action="<?php echo base_url() ?>.Dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?php echo $this->session->userdata('username') ?>" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="jasa_pengiriman">
                        <option value="">==Pilih Jasa Pengiriman==</option>
                        <option value="0">JNE</option>
                        <option value="1">GOJEK</option>
                        <OPTION value="2">GRAB</OPTION>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Pilih Bank </label>
                    <select class="form-control" name="bank">
                        <option>==Pilih Bank==</option>
                        <option value="0">BCA - 1234565432</option>
                        <option value="1">OVO - 123455432</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>


            </form>
            <?php
            }else  echo "<h4>Keranjang Belanja Anda masih kosong !"
            ?>
        </div>


        <div class="col-md-2"></div>
    </div>


</div>