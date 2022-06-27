<section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
        
          </div>

          <div class="section-body">
         

            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Member</h4>
                  </div>
                  <div class="card-body">
                <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="<?php echo site_url('member1');?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member1/transaksi');?>" class="nav-link">Transaksi</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member1/riwayat_transaksi');?>" class="nav-link">Riwayat Transaksi</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member1/toko');?>" class="nav-link">Toko</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member1/ubah_profil');?>" class="nav-link">Ubah Profil</a></li>
                      <li class="nav-item"><a href="<?php echo site_url('member1/logout');?>" class="nav-link">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
	
              <div class="col-md-8">
			  		          <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Menunggu Konfirmasi <span class="badge badge-white">5</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Diproses <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Dikirim <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Sampai Ditujuan <span class="badge badge-primary">0</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><br>
     <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Invoices</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">

                  <table class="table table-striped">
                      <tr>
                        <th>Invoice ID</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                      <?php foreach ($transaksi as $key => $value) {
                      ?>
                      <tr>
                        <th><?php echo $value->idOrder ?></th>
                        <th><?php echo $value->statusOrder ?></th>
                        <th><?php echo $value->tglOrder; ?></th>
                      </tr>
                      <?php 
                      } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
  		    </div>
      	</section>
      