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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('awal/gedung') ?>">Gedung</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('awal/peminjaman') ?>">Peminjaman<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login') ?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
          <br>
          <!-- <div class="row"> -->
            <legend class="text-center">Form Peminjaman Gedung Pemerintah Kota Batu</legend>
            <legend class="text-center"><h6><b>Dimohon untuk melihat jadwal sebelum melakukan peminjaman gedung. Pastikan tidak meminjam pada tanggal dan waktu yang sama.</b></h6></legend>
            <?php echo form_open('awal/pinjam/'.$this->uri->segment(3)); ?>
            <?php echo validation_errors() ?>
            <?php if (ISSET($error)){
              echo $error;
            } ?>
              <div class="form-group">
                <label for="">Nama SKPD</label>
                <select name="fk_skpd" id="inputFk_skpd" class="form-control">
                  <?php foreach ($skpd as $key) { ?>
                    <option value="<?php echo $key->id_skpd ?>"><?php echo $key->nama_skpd ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" id="" class="form-control" title="" placeholder="Nama Peminjam" value="---">
              </div>

              <div class="form-group">
                <label for="">NIP</label>
                <input type="text" name="nip" id="" class="form-control" title="" placeholder="NIP" value="---">
              </div>

              <div class="form-group">
                <label for="">Gedung</label>
                <select name="fk_gedung" id="inputFk_skpd" class="form-control">
                  <?php foreach ($gedung as $key) { ?>
                    <option value="<?php echo $key->id_gedung ?>"><?php echo $key->nama_gedung ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" name="tanggal" id="inputTanggal" class="form-control" title="">
              </div>

              <div class="form-group">
                <label for="">Jam Mulai</label>
                <input type="time" name="jam" id="inputJam" class="form-control" title="">
              </div>

              <div class="form-group">
                <label for="">Jam Selesai</label>
                <input type="time" name="jam_selesai" id="inputJam" class="form-control" title="">
              </div>

              <div class="form-group">
                <label for="">Jumlah Orang</label>
                <input type="text" name="jumlah_orang" id="" class="form-control" title="" placeholder="Jumlah Orang">
              </div>

              <div class="form-group">
                <label for="">Acara</label>
                <input type="text" name="acara" id="" class="form-control" title="" placeholder="Acara">
              </div>

              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" id="" class="form-control" title="" placeholder="Keterangan" value="---">
              </div>

              <button type="submit" class="btn btn-primary">Pinjam</button>
            <?php echo form_close(); ?>
          <!-- </div> -->
<br><br>
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
