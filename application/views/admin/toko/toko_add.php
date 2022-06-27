<div class="section-body">
             <?php $this->load->view('frontend/user_member'); ?>
             <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="col-md-12">
             <div class="col-md-8 col-md-12 col-sm-12 col-12">
              <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('member/insert_toko'); ?>">
                <div class="card" id="settings-card">
                  <div class="card-header">
                    <h4>Form Membuat Toko Baru</h4>
                  </div>
                  <div class="card-body">
                    <p class="text-muted">Silahkan masukkan</p>
                    <div class="form-group row align-items-center">
                      <label for="site-title" class="form-control-label col-sm-3 text-md-left">Nama Toko</label>
                      <div class="col-sm-6 col-md-9">
                        <input type="text" name="namaToko" class="form-control" id="site-title">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label for="site-description" class="form-control-label col-sm-3 text-md-left">Deskripsi</label>
                      <div class="col-sm-6 col-md-9">
                        <textarea class="form-control" name="deskripsi" id="site-description"></textarea>
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label class="form-control-label col-sm-3 text-md-left">Logo Toko</label>
                      <div class="col-sm-6 col-md-9">
                        <div class="custom-file">
                          <input type="file" name="logo" class="custom-file-input" id="site-logo">
                          <label class="custom-file-label">Choose File</label>
                        </div>
                        <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                      </div>
                    </div>
                  <div class="card-footer bg-whitesmoke text-md-right">
                    <button class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>