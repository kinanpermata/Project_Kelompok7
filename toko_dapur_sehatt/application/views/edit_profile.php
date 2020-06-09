<div class="site-section first-section" data-aos="fade">
<div class="">
<br><br><br>

    <?php foreach($profile as $pro) : ?>
      <div class="container">
      <h3 class="text-center">Edit Data Profile</h3><br>
        <div class="row justify-content-center">
            <form  action="<?php echo base_url(). 'Dashboard/update_profile'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                      <div class="col-md-6">
                      <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $pro->id?>">
                  <input type="text" name="nama" class="form-control" value="<?php echo $pro->nama?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo $pro->username?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="alamat">Alamat Lengkap</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $pro->alamat?>">
                </div>
              </div>
                      </div>
                      <div class="col-md-6">
                      <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="notelp">No Telpon</label>
                  <input type="text" name="notelp" class="form-control" value="<?php echo $pro->notelp?>">
                </div>
              </div>
                      <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $pro->email?>">
                </div>
              </div>
                      <div class="row form-group">
              <div class="col-md-12">
                  <label class="font-weight-bold" for="gambar">Foto</label>
                  <input type="file" name="gambar" class="form-control">
                  </div> 
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Batalkan</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
  
                      </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; ?> 
    </div>
</div>
