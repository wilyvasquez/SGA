<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGA CODE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/square/blue.css">
  <!-- Theme Skins -->
  <link rel="stylesheet" href="<?= base_url()?>bower_components/admin-lte/dist/css/skins/_all-skins.min.css">
  <style type="text/css">
      .online, .offline{
        display: inline-block;
        padding: 0.5rem;
        border-radius: 5px;
        margin: 1rem;
      }
      .online{
        border: 3px solid green;
        color: green;
      }
      .offline{
        border: 3px solid red;
        color: red;
      }
      .preloader{
        background-color:#FFF;
        height: 80%;
        padding-top: 60px;
        margin-left: 14px;
        margin-top: 20px;
        position: fixed;
        width: 1422px;
        z-index: 2;
      }
      .loader{
        width: 150px;
        height: 150px;
        margin: 40px auto;
        transform: rotate(-45deg);
        font-size: 0;
        line-height: 0;
        animation: rotate-loader 5s infinite;
        padding: 25px;
        border: 1px solid #cf303d;
    }
    .loader .loader-inner{
        position: relative;
        display: inline-block;
        width: 50%;
        height: 50%;
    }
    .loader .loading{
        position: absolute;
        background: #cf303d;
    }
    .loader .one{
        width: 100%;
        bottom: 0;
        height: 0;
        animation: loading-one 1s infinite;
    }
    .loader .two{
        width: 0;
        height: 100%;
        left: 0;
        animation: loading-two 1s infinite;
        animation-delay: 0.25s;
    }
    .loader .three{
        width: 0;
        height: 100%;
        right: 0;
        animation: loading-two 1s infinite;
        animation-delay: 0.75s;
    }
    .loader .four{
        width: 100%;
        top: 0;
        height: 0;
        animation: loading-one 1s infinite;
        animation-delay: 0.5s;
    }
    @keyframes loading-one {
        0% {
            height: 0;
            opacity: 1;
        }
        12.5% {
            height: 100%;
            opacity: 1;
        }
        50% {
            opacity: 1;
        }
        100% {
            height: 100%;
            opacity: 0;
        }
    }
    @keyframes loading-two {
        0% {
            width: 0;
            opacity: 1;
        }
        12.5% {
            width: 100%;
            opacity: 1;
        }
        50% {
            opacity: 1;
        }
        100% {
            width: 100%;
            opacity: 0;
        }
    }
    @keyframes rotate-loader {
        0% {
            transform: rotate(-45deg);
        }
        20% {
            transform: rotate(-45deg);
        }
        25% {
            transform: rotate(-135deg);
        }
        45% {
            transform: rotate(-135deg);
        }
        50% {
            transform: rotate(-225deg);
        }
        70% {
            transform: rotate(-225deg);
        }
        75% {
            transform: rotate(-315deg);
        }
        95% {
            transform: rotate(-315deg);
        }
        100% {
            transform: rotate(-405deg);
        }
    }
        </style>
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
              <div class="col-md-12">
                <div class="loader">
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
              </div>
              <div class="col-md-12" style="text-align: center;margin-bottom: 250px">
                <p class="text-center" id="conexion"></p>
                <p class="text-center" id="online"></p><br>
                <a href="<?= base_url() ?>login" class="btn btn-success" id="entrar" style="display: none">Entrar</a>
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
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
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
</script>
</body>
</html>
