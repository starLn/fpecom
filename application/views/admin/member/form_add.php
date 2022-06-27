<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Forms</h2>
            <div class="row">

                <div class="col-12 col-md-6 col-lg-6">
                    <form method="POST" action="<?php echo site_url('member/save');?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Member</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">

                                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        name="username">

                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        name="password">

                                    <label for="namaKonsumen" class="col-sm-3 col-form-label">Nama Konsumen</label>
                                    <input type="text" class="form-control" id="namaKonsumen"
                                        placeholder="Nama Konsumen" name="namaKonsumen">

                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat"
                                        name="alamat">

                                    <label for="idKota" class="col-sm-3 col-form-label">Kota</label>
                                    <select class="form-control" id="idKota" name="idKota" :>
                                        <?php foreach($kota as $item) { ?>
                                        <option value="<?= $item->idKota;?>"><?= $item->namaKota; ?></option>
                                        <?php } ?>
                                    </select>

                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">

                                    <label for="tlpn" class="col-sm-3 col-form-label">Telepon</label>
                                    <input type="text" class="form-control" id="tlpn" placeholder="Telepon" name="tlpn">

                                    <label for="idKota" class="col-sm-3 col-form-label">Status Aktif</label>
                                    <select class="form-control" id="idKota" name="statusAktif" :>
                                        <option value="Y">Aktif</option>
                                        <option value="N">Tidak Aktif</option>
                                    </select>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </form>
                </div>
    </section>
</div>