
<div class="slant-1"></div>
<div class="site-section first-section " data-aos="fade" style="margin-left: 150px; margin-right: 150px;">
      <div class="container">
        <div class="row">
        <?php foreach ($profile as $us) : ?>
          <div class="col-md-12 col-lg-8 mb-2">
            <div class="container">
            <div class="row no-gutters align-items-stretch">
                <div class="col-lg-8 mr-lg-auto py-5">
                <h2 class="site-section-heading text-uppercase font-secondary mb-5">Profile <?php echo $us->nama ?></h2>
                <p>Username : <?php echo $us->username ?></p>  
                <p>Alamat   : <?php echo $us->alamat ?></p>  
                <p>No Telpon: <?php echo $us->notelp ?></p>  
                <p>Email    : <?php echo $us->email ?></p>
                </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 mb-1 bg-white">
            <img src="<?php echo base_url().'/uploads/'.$us->gambar ?>" alt="Image" class="img-fluid" >
            <br><br><br>
            <a href="<?php echo base_url('Dashboard/edit_profile/'.$us->id) ?>"><div class="btn btn-sm btn-primary text--white">Edit Profile</div></a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>