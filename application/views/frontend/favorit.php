<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="w-100">
        <div class="card card-primary">
          <div class="card-header">
            <h4>Favorit</h4>
          </div>

          <div class="card-body">
            <?php if ($this->session->flashdata('notif')) : ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('notif'); ?>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
              </div>
            <?php endif; ?>

            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($favorit as $key => $value) { ?>
                  <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td class="font-weight-600"><?php echo $value->namaProduk ?></td>
                    <td><?php echo $value->harga ?></td>

                    <td>
                      <a href="<?php echo site_url('favorit/hapus_favorit/' . $value->idFavorit) ?>" class="btn btn-danger">Hapus</a>
                      <a href="<?php echo site_url('cart/add_to_cart/' . $value->idProduk) ?>" class="btn btn-primary">Tambah ke cart</a>
                    </td>
                  </tr>
                <?php } ?>
              </table>

            </div>

          </div>
        </div>
      </div>
    </div>
</section>