<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?php echo site_url('home'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Detail produk</h1>

    </div>
    <div class="container mt-5">
        <div class="d-flex flex-column justify-content-center w-100">
            <div class="card ">
                <div class="card-header d-flex justify-content-between">
                    <h4>Foto</h4>
                    <a href="<?php echo site_url('favorit/tambah_favorit/' . $produk->idProduk) ?>"><img src="<?php echo base_url('assets/heart.png') ?>" alt=""></a>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <img style="width: 300px;" src="<?php echo base_url('assets/upload_produk/' . $produk->foto) ?>">
                </div>
                <div class="card-body">
                    <h5><?php echo $produk->namaProduk ?></h5>
                    <h5>Rp. <?php echo $produk->harga ?></h5>
                    <hr>
                    <?php echo $produk->deskripsiProduk ?>
                </div>
            </div>

            <div class="card">
                <?php if ($this->session->flashdata('notif')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('notif'); ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success p-4" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="card-header d-flex justify-content-between">
                    <h4>Ulasan</h3>
                </div>



                <div class="card-body">
                    <?php if (!empty($komentar)) { ?>
                        <?php foreach ($komentar as $a) : ?>
                            <div class="komentar ">
                                <div class="title d-flex justify-content-between">
                                    <span class="h5"> <?= $a->namaKonsumen ?></span>
                                    <a href="<?php echo site_url('komentar/hapus_komentar/' . $a->idKomentar . '/' . $produk->idProduk) ?>"><i class="fas fa-trash" style="font-size: 14px; color:black;"></i></a>
                                </div>
                                <p><?= $a->isi ?> [<small> <?= $a->tanggalKomentar ?></small>]</p>
                            </div>
                        <?php endforeach ?>
                    <?php  }  ?>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form action="<?php echo site_url('komentar/tambah_komentar/' . $produk->idProduk) ?>" method="POST">
                            <label>Masukan Komentar</label>
                            <textarea class="form-control" name="komentar"></textarea>
                            <div class="button mt-4 text-right">
                                <button class="btn btn-primary " type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>