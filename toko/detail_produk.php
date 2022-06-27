<section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo base_url('home/menu');?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
          </div>

            <div class="card-body">
              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php endif; ?>

          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Menu Toko <strong>" <?php echo $toko->namaToko ?> "</strong></h4>
                  </div>
                  <div class="card-body">
               <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="<?php echo base_url('toko/detail/'.$toko->idToko);?>" class="nav-link">Beranda</a></li>
                      <li class="nav-item"><a href="<?php echo base_url('toko/edit/'.$toko->idToko);?>" class="nav-link">Edit</a></li>
                      <li class="nav-item"><a href="<?php echo base_url('toko/produk/'.$toko->idToko);?>" class="nav-link">Produk</a></li>
                      <li class="nav-item"><a href="<?php echo base_url('toko/pesanan');?>" class="nav-link">Pesanan</a></li>
                      <li class="nav-item"><a href="<?php echo base_url('toko/laporan');?>" class="nav-link">Laporan</a></li>
                    </ul>
                  </div>
                </div>
              </div>
	
              <div class="col-md-8">
					<div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <h1><?php echo $produk->namaProduk ?></h1>
                  </div>
                </div>
              </div>
            </div><br>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Detail</h4>
                  <div class="card-header-action">
                    
                  </div>
                </div>
                <div class="card-body p-0">

                    <div class="px-5 d-flex justify-content-center">
                        <img src="<?php echo base_url('assets/foto-produk/'.$produk->foto) ?>" class="img-thumbnail" style="object-fit: contain" alt="logo-toko-<?php echo $produk->namaProduk?>" width="400" height="400">
                    </div>

                    <dl class="row p-5">
                        <dt class="col-sm-3">Nama</dt>
                        <dd class="col-sm-9"><?php echo $produk->namaProduk ?></dd>

                        <dt class="col-sm-3">Deskripsi</dt>
                        <dd class="col-sm-9">
                            <p><?php echo $produk->deskripsiProduk ?></p>
                        </dd>

                        <dt class="col-sm-3">Harga</dt>
                        <dd class="col-sm-9"><?php echo $produk->harga ?></dd>

                        <dt class="col-sm-3 text-truncate">Berat</dt>
                        <dd class="col-sm-9"><?php echo $produk->berat ?></dd>

                        <dt class="col-sm-3 text-truncate">Stok</dt>
                        <dd class="col-sm-9"><?php echo $produk->stok ?></dd>

                    </dl>

                    <div class="px-5 pb-3 d-flex justify-content-between">
                        <a href="<?php echo base_url('/toko/edit_produk/'.$produk->idProduk); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url('/toko/delete_produk/'.$produk->idProduk); ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
              </div>
            </div>
              </div>

			
            </div>
  		    </div>
      	</section>
      