<div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(assets/assets_cus/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h1 class="font-secondary  font-weight-bold text-uppercase">Kids Care</h1>
            </div>
          </div>
        </div>
      </div> 
</div>

    <div class="slant-1"></div>

  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
        <?php foreach ($Kids as $brg) : ?>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image text-center">
              <a href="<?php echo base_url('Dashboard_akhir/detail/' .$brg->id_brg) ?>"><img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="<?php echo base_url('Dashboard_akhir/detail/' .$brg->id_brg) ?>"><?php echo $brg->nama_brg ?></a></h2>
                <p><?php echo $brg->keterangan ?></p>
                <p class="mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></p><br>
                <?php echo anchor('Dashboard/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-primary text-white px-2">Tambah Keranjang</div>') ?>
                <?php echo anchor('Dashboard_akhir/detail/' .$brg->id_brg, '<div class="btn btn-success text-white px-2">Detail</div>') ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
  </div>