<section class="section">
            <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo site_url('home');?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail produk</h1>
        
          </div>
      <div class="container mt-5">
        <div class="d-flex flex-column justify-content-center w-100">
            <div class="card align-items-center">
                <div class="card-header"><h4>Foto</h4></div>
                <div class="card-body">
                    <img src="<?php echo base_url('assets/upload_produk/'.$produk->foto) ?>">
                </div>
            </div>
            <div class="card w-100">
                <div class="card-header"><h4>Detail produk</h4></div>
                <div class="card-body">
                    <h5><?php echo $produk->namaProduk ?></h5>
                    <h5>Rp. <?php echo $produk->harga ?></h5>
                    <hr>
                    <?php echo $produk->deskripsiProduk ?>
                </div>
            </div>

            
        </div>
      </div>
</section>