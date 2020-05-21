  <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page overlay" style="background-image: url(assets/assets_cus/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h1 class="font-secondary  font-weight-bold text-uppercase">Selamat Datang Di Dapur Sehat</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url(assets/assets_cus/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Selamat Datang Di Dapur Sehat</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="slant-1"></div>

    <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Products</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Get Your Health Food Here!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
            <?php foreach ($barang as $brg) : ?>
              <div class="media-image text-center">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="Image" class="img-fluid">
                <div class="media-image-body text-center">
                  <h2 class="font-secondary text-uppercase"><?php echo $brg->nama_brg ?></h2>
                  <p><?php echo $brg->keterangan ?></p>
                  <p class="mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></p><br>
                  <?php echo anchor('Dashboard/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-primary text-white px-2">Tambah Keranjang</div>') ?>
                  <?php echo anchor('Dashboard_akhir/detail/' .$brg->id_brg, '<div class="btn btn-success text-white px-2">Detail</div>') ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
          <h2 class="site-section-heading text-center text-uppercase">Recent Blog Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
            <?php foreach ($blog as $blg) : ?>
              <div class="media-image text-center">
                <img src="<?php echo base_url().'/uploads/'.$blg->gambar_blog ?>" alt="Image" class="img-fluid">
                <div class="media-image-body text-center">
                  <h2 class="font-secondary text-uppercase"><?php echo $blg->nama_blog ?></h2>
                  <p><a href="<?php echo base_url('Dashboard_akhir/detail_blog/' .$blg->id_blog) ?>">Read More</a></p>
                  </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>