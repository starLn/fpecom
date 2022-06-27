      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1>Manajemen Member</h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Member</a></div>
                  </div>
              </div>

              <div class="section-body">
                  <h2 class="section-title">Member</h2>
                  <div class="row">
                      <div class="col-12 col-md-19 col-lg-16">
                          <div class="card">
                              <div class="card-header">
                                  <h4>Data Member</h4>
                                  <a href="<?php echo site_url('member/add');?>" class="btn btn-primary">Tambah
                                      Member</a>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-md">
                                          <tr>
                                              <th>#</th>
                                              <th>Username</th>
                                              <th>Nama Konsumen</th>
                                              <th>Alamat</th>
                                              <th>Email</th>
                                              <th>Telepon</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                          <?php if (empty($member)) { ?>
                                          <tr>
                                              <td colspan="9" class="text-center">Data Kosong</td>
                                          </tr>
                                          <?php } else $no = 0;
                                          foreach($member as $item) : $no++ ?>
                                          <tr>
                                              <td><?= $no ?></td>
                                              <td><?php echo $item->username; ?></td>
                                              <td><?php echo $item->namaKonsumen; ?></td>
                                              <td><?php echo $item->alamat; ?></td>
                                              <td><?php echo $item->email; ?></td>
                                              <td><?php echo $item->tlpn; ?></td>
                                              <td>
                                                  <?php if ($item->statusAktif == 'Y') { ?>
                                                  <span class="badge badge-success badge-ad">Aktif</span>
                                                  <?php } else { ?>
                                                  <span class="badge badge-danger badge-ad">Tidak Aktif</span>
                                                  <?php } ?>
                                              </td>
                                              <td>
                                                  <?php if ($item->statusAktif == 'Y') { ?>
                                                  <a href="<?= site_url('member/gantistatustidakaktif/'. $item->idKonsumen); ?>"
                                                      class="btn btn-danger"
                                                      onClick="return confirm('Are you sure for make this change?')">Tidak
                                                      Aktif</span>
                                                      <?php } else { ?>
                                                      <a href="<?= site_url('member/gantistatusaktif/'. $item->idKonsumen); ?>"
                                                          class="btn btn-success"
                                                          onClick="return confirm('Are you sure for make this change?')">Aktif</span>
                                                          <?php } ?>
                                              </td>
                                          </tr>
                                          </td>
                                          </tr>
                                          <?php endforeach; ?>
                                      </table>
                                  </div>
                              </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>