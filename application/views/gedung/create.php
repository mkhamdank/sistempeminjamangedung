<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pemerintah Kota Batu | Bagian Umum</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>/assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>/assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>/assets/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('Admin') ?>" style="color: white">Pemerintah Kota Batu | Sekretariat Daerah Bagian Umum</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url('Admin') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="<?php echo site_url('login/logout') ?>" class="nav-link" style="color: white">
            <i class="fa fa-fw fa-sign-out"></i>
          Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('Admin') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('Gedung') ?>">Gedung</a>
        </li>
        <li class="breadcrumb-item active">Tambah Gedung</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">SKPD</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('skpd') ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Gedung</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('gedung') ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Peminjaman</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('peminjaman') ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Galeri</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('galeri') ?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Gedung</div>
        <div class="card-body">
          <?php echo form_open('gedung/create'); ?>
          <?php echo validation_errors() ?>
            <div class="form-group">
              <label for="">Nama Gedung</label>
              <input type="text" class="form-control" id="" placeholder="Nama gedung" name="nama_gedung">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
          <?php echo form_close(); ?>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at <?php echo date(); ?></div> -->
      </div>
    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Pemerintah Kota Batu | Sekretariat Daerah Bagian Umum 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>/assets/admin/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/admin/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
