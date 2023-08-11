<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Thirsty</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="dist/img/favicon.ico">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><img src="dist/img/logo.png" width="80%"></p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" id="username" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
       <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
          <input type="hidden" name="grabar" value="si" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="iconpassword" class="fas fa-eye-slash" onclick="verpass()"></span>
            </div>
          </div>
        </div>
        <div class="row">          
          <div class="col-12">
            <button type="button" class="btn btn-block bg-gradient-success btn-lg" onclick="login()">Accesar</button>
          </div>
          <div class="col-12">
            <br><p class="mb-1">
              <a href="forgot-password.html">Olvidaste tu contraseña?</a>
              </p>
            <p><center>
              <font size="2px">Versión 1.0 / Uso interno<br>Todos los derechos Reservados Thirsty 2023</font></center></p>
              
          </div>
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/funciones_index.js"></script>
</body>
</html>
