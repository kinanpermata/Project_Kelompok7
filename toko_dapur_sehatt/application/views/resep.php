
<div class="site-blocks-cover inner-page overlay" style="background-image: url(assets/assets_cus/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-5 text-center" data-aos="fade">
          <h1 class="text-uppercase">Food Recipes</h1>
          <span class="caption d-block text-white">Mom, Did You Know ?</span>
        </div>
      </div>
    </div>  

    <div class="slant-1"></div>

  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
        <?php foreach ($Resep as $blg) : ?>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image">
              <a href="<?php echo base_url('Dashboard_akhir/detail_blog/' .$blg->id_blog) ?>"><img src="<?php echo base_url().'/uploads/'.$blg->gambar_blog ?>" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="<?php echo base_url('Dashboard_akhir/detail_blog/' .$blg->id_blog) ?>"><?php echo $blg->nama_blog ?></a></h2>
                <p><a href="<?php echo base_url('Dashboard_akhir/detail_blog/' .$blg->id_blog) ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
  </div>
