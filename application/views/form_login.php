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
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>/assets/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      	<?php echo form_open('login'); ?>
      	<?php echo validation_errors(); ?>
        <form>
          <div class="form-group">
            <label for="">Username</label>
            <input name="username" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        <?php echo form_close(); ?>
        <br>
        <a href="<?php echo site_url('awal') ?>" class="btn btn-primary btn-block">Batal</a>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>/assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
