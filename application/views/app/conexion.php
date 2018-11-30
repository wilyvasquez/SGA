<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGA CODE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="shortcut icon" sizes="57x57" href="<?= base_url() ?>assets/img/favicon.ico">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/square/blue.css"> -->
  <!-- Theme Skins -->
  <link rel="stylesheet" href="<?= base_url()?>bower_components/admin-lte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?= base_url()?>assets/css/conexion.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/offline-theme-default.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/offline-language-english.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css" />
  <script src="<?= base_url() ?>assets/js/offline.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/js/offline-simulate-ui.min.js"></script> -->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page skin-blue sidebar-mini">
<div class="warpper"> 
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url()?>atrum/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>ode</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SGA</b> Code</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

    </nav>
  </header>
</div>
<section class="content" id="preloader">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body no-padding">
          <!-- <div class="container"> -->
            <div class="row" style="margin-top: 150px">
              <div class="col-md-12" style="text-align: center;">
                <div class="loader online">
                  <div class="loader-inner">
                    <div class="loading one"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading two"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading three"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading four"></div>
                  </div>
                </div>
                <div class="loader none offline" style="border: 1px solid #cf303d;">
                  <div class="loader-inner">
                    <div class="loading one" style="background: #cf303d"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading two" style="background: #cf303d"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading three" style="background: #cf303d"></div>
                  </div>
                  <div class="loader-inner">
                    <div class="loading four" style="background: #cf303d"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-bottom: 250px">
                <div style="text-align: center;">
                  <div class="online">
                    <a href="<?= base_url() ?>login" class="btn btn-success">Entrar</a>
                  </div>
                </div>
                <!-- <div class="alert alert-danger offline none">Solo puedes navegar teniendo acceso a internet.</div> -->
                <div style="text-align: center;">
                  <div class="offline" style="display: none">
                    <a href="#" class="btn btn-danger" disabled>Error</a>
                  </div>
                </div>
              </div> 
            </div>
            
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>  
</section>
<!-- jQuery 3 -->
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/icheck.min.js"></script>
<!-- <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script> -->
<script>
        $(function(){
            
            var 
                $online = $('.online'),
                $offline = $('.offline');

            Offline.on('confirmed-down', function () {
                $online.fadeOut(function () {
                    $offline.fadeIn();
                    console.log("ocultar online");
                });
            });

            Offline.on('confirmed-up', function () {
                $offline.fadeOut(function () {
                    $online.fadeIn();
                    console.log("ocultar Offline");
                });
            });

            Offline.on('checking', function () {
                console.log("checando");
            });

            // Offline.options = {checks: {image: {url: 'favicon.ico'}, active: 'image'}}

            Offline.on('reconnect:connecting', function () {
                $online.fadeOut(function () {
                    $offline.fadeIn();
                    console.log("conectando");
                });
            });           

        });
    </script>
<!-- <script type="text/javascript">
$(document).ready(function(){

    var s = document.getElementById('online');
    var c = document.getElementById('conexion');
    setInterval(function () {
      s.className = navigator.onLine ? 'online' : 'offline';
      s.innerHTML = navigator.onLine ? 'online' : 'offline';  
      if (navigator.onLine) {        
        c.innerHTML = ("Conexion Exitosa");
        $("#entrar").fadeIn(5000);
      }else {
        c.innerHTML = "Error de conexion";
        $("#entrar").fadeOut(100);
      }
    }, 250);
  //   setTimeout(function() {
  //   $("#preloader").fadeOut();
  // },3000);
});
</script> -->
</body>
</html>
