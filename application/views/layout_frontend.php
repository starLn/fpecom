<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce &mdash; Tokokita</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/style.css'); ?>">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="<?php echo site_url('home') ?>" class="navbar-brand sidebar-gone-hide">Tokokita</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Tentang Tokokita</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cara Belanja</a></li>
          </ul>
        </div>
        <form action="<?php echo site_url('home/pencarian') ?>" method="POST" class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <select name="kategori" data-width="150" class="form-control">
              <?php foreach ($kategori as $val) { ?>
                <option value="<?php echo $val->idkat ?>" class="form-control"><?php echo $val->namakat; ?></option>
              <?php } ?>
            </select>
            <input name="kata" class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="300">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>


          </div>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>

          </li>

        </ul>
        <?php
        if ($this->session->userdata('id') == null) {
        ?>
          <a href="<?php echo site_url('home/login'); ?>" class="btn btn-outline-light">Masuk</a>
          &nbsp; &nbsp; &nbsp;
          <a href="<?php echo site_url('home/register'); ?>" class="btn btn-outline-light">Daftar</a>
        <?php
        }
        ?>

        <?php
        if ($this->session->userdata('id') != null) {
        ?>
          <a href="<?php echo site_url('member1'); ?>" class="btn btn-outline-light">Menu Member</a>
          &nbsp; &nbsp; &nbsp;
          <a href="<?php echo site_url('home/logout'); ?>" class="btn btn-outline-light">Keluar</a>
        <?php
        }
        ?>

      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">

            <?php foreach ($kategori as $val) { ?>
              <li class="nav-item">
                <a href="#" class="nav-link"><span><?php echo $val->namakat; ?></span></a>
              </li>
            <?php } ?>

          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <?= $contents ?>
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="#">Tokokita</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/stisla.js'); ?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/scripts.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/custom.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/script.js'); ?>"></script>
</body>

</html>