<?php
error_reporting(0);

include "../config/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan Sepulsura</title>

  <!-- Favicon -->
  <link href="../img/logo.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin_LTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../admin_LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin_LTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="?p=admin" class="h1"><img src="../img/logo.png" height="25%" width="25%"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

    <!-- /.konten -->
    <?php
    if($_GET['p']=="login") {
      require "form_login.php";
    } else if($_GET['p']=="signup") {
      require "form_signup.php";
    } else if ($_GET['p']=="admin"){
      echo "<script>window.location='../admin_LTE/index2.php';</script>";
    }else {
      require "form_login.php";
    }
    ?>
    <!-- /.konten -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../admin_LTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin_LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin_LTE/dist/js/adminlte.min.js"></script>
</body>
</html>
