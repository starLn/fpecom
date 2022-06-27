<!-- Main Content -->

        <section class="section">
        
		  <div class="row">
		  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
             
                  <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2" class="active"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo base_url('assets/slider/slide3.webp');?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Heading</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/slider/slide3.webp');?>" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Heading</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                        
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
				</div>
				</div>
        
          <div class="section-body">
            <h2 class="section-title">Produk Terbaru</h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>

            <div class="row">
            <?php foreach ($produkbaru as $key => $value) {
                ?>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                    <div class="article-header">
                        <div class="article-image" data-background="<?php echo base_url('assets/upload_produk/'.$value->foto) ?>">
                        </div>
                        <div class="article-title">
                        <h2><a href="#"><?php echo $value->namaProduk ?></a></h2>
                        </div>
                    </div>
                    <div class="article-details">
                        <p><?php echo $value->deskripsiProduk?></p>
                        <div class="article-cta">
                            <a href="<?php echo site_url('home/detail_produk/'.$value->idProduk) ?>" class="btn btn-primary">Detail</a>
                            <a href="<?php echo site_url('cart/add_to_cart/'.$value->idProduk) ?>" class="btn btn-success">Tambah ke cart</a>
                        </div>
                        
                        
                    </div>
                    </article>
                </div>

                <?php
                } ?>
            </div>
          </div>
        </section>
   