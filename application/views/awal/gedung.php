<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemerintah Kota Batu | Bagian Umum</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/assets/user/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('awal') ?>"><img src="<?php echo base_url('assets/logo.png') ?>" class="img-responsive" alt="Image" width="20px">       Pemerintah Kota Batu | Sekretariat Daerah Bagian Umum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('awal') ?>">Beranda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('awal/tentang') ?>">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('awal/galeri') ?>">Galeri</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('awal/gedung') ?>">Gedung<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('awal/peminjaman') ?>">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login') ?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    
        <!-- /.col-lg-3 -->
        <div class="col-lg-12 text-center">
          <br>
          <div class="row">
          <legend>Data Gedung Pemerintah Kota Batu</legend>
          <legend><h6><b>Dimohon untuk melihat jadwal sebelum melakukan peminjaman gedung. Pastikan tidak meminjam pada tanggal dan waktu yang sama.</b></h6></legend>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nama Gedung</th>
                  <th>Kondisi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($gedung as $key) { ?>
                  <tr>
                    <td><?php echo $key->nama_gedung ?></td>
                    <td><?php echo $key->status ?></td>
                    <td><?php 
                      echo "<a href=".site_url('awal/pinjam/'.$key->id_gedung)." class='btn btn-primary'><b>PINJAM</b></a> / <a href=".site_url('awal/detail/'.$key->id_gedung)." class='btn btn-success'><b>DETAIL</b></a>";
                     ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          </div>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Pemerintah Kota Batu | Sekretariat Daerah Bagian Umum 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>/assets/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
