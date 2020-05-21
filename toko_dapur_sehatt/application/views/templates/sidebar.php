    <div class="site-navbar-wrap js-site-navbar bg-white">
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="<?php echo base_url('Dashboard_akhir') ?>" class="font-weight-bold text-uppercase">Dapur Sehat</a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="<?php echo base_url('Dashboard_akhir') ?>">Home</a></li>
                    <li class="has-children">
                      <a href="<?php echo base_url('Dashboard_akhir/Produk')?>">All Product</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="<?php echo base_url('Kategori/Snack')?>">Snack</a></li>
                        <li><a href="<?php echo base_url('Kategori/Food')?>">Food</a></li>
                        <li><a href="<?php echo base_url('Kategori/Kitchen')?>">Kitchen Needs</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="<?php echo base_url('Dashboard_akhir/Blog') ?>">Blog</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="<?php echo base_url('Kategori/Resep')?>">Food Recipes</a></li>
                        <li><a href="<?php echo base_url('Kategori/Info')?>">Info Si Kecil</a></li>
                      </ul>
                    </li>
                      <li>
                        <?php $keranjang = 'Keranjang : '.$this->cart->total_items(). ' items'?>
                        <a><?php echo anchor ('Dashboard/detail_keranjang', $keranjang) ?></a>
                      </li>
                    <li><a href="<?php echo base_url('Dashboard_akhir/contact')?>">Contact</a></li>
                   <?php if($this->session->userdata('username')) { ?>
                      <li class="has-children">
                        <div>Selamat Datang <?php echo $this->session->userdata('username') ?> </div>
                        <ul class="dropdown arrow-top">
                          <li><a href="<?php echo base_url('Dashboard/transaksi')?>">Transaksi</a></li>
                          <li><a href="<?php echo base_url('Dashboard/edit_profil')?>">Edit Profile</a></li>
                          <li><a href="<?php echo base_url('Auth/logout') ?>"><span class="d-inline-block bg-primary text-white btn btn-primary">Logout</span></a></li>
                        </ul>
                      </li>
                      <?php } else {?>
                        <li><a href="<?php echo base_url('Auth/login') ?>"><span class="d-inline-block bg-primary text-white btn btn-primary">Login</span></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>