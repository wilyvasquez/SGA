<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/dist/css/skins/_all-skins.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/all.css">
  <!-- toggle -->
  <link href="<?= base_url() ?>bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
  <style>
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
    .toggle.ios .toggle-handle { border-radius: 20px; }
  </style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>oda</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>L4</b> Soda</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= base_url() ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url() ?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url() ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?= $menu ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alta Conductores
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Conductores</a></li>
        <li class="active">Alta</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
        <div class="row">
          <div class="col-md-7">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Conductores</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre ...">
                </div>
                <div class="form-group">
                  <label for="edad">Edad</label>
                  <input type="text" class="form-control" id="edad" placeholder="Edad ...">
                </div>
                <div class="form-group">
                  <label for="ife">N° IFE</label>
                  <input type="text" class="form-control" id="ife" placeholder="N° IFE ...">
                </div>
                <div class="form-group">
                  <label for="ife">Licencia de conducir</label>
                  <input type="text" class="form-control" id="ife" placeholder="N° IFE ...">
                </div>
                <div class="form-group">
                  <label for="ife">Fecha de caducidad licencia</label>
                  <input type="text" class="form-control" id="ife" placeholder="N° IFE ...">
                </div>
                <div class="form-group">
                  <label>Anexe cualquier informacion necesaria *</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" id="foto">
                  <p class="help-block">Imagen en formato jpg,png.</p>
                </div>
                <div class="form-group">
                  <label>
                    <input id="toggle-event" type="checkbox" checked data-toggle="toggle" data-size="small" data-style="ios"> <font id="console-event"></font>
                    <!-- <div id="console-event"></div> -->
                  </label>
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Activo
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Subir</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Choferes</h3>
            </div>
            <div class="box-body">
                <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">                
                <img class="img-circle img-sm" src="<?= base_url() ?>assets/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    Benito Juarez Herrera
                    <span class="text-muted pull-right">
                  <div class="dropdown">
                    <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                    <span style="color: #000">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                  </a>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Moficiar Informacion</a></li>
                      <li><a href="#">Actualizar licencia</a></li>
                      <li><a href="#">Eliminar chofer</a></li>
                    </ul>
                  </div>
                </span>
                  </span>
                  200 Recorridos
                </div>
              </div>
            </div>
            <div class="box-footer box-comments" style="margin-top: 5px">
              <div class="box-comment">                
                <img class="img-circle img-sm" src="<?= base_url() ?>assets/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    Miguel Hidalgo Carrizal
                    <span class="text-muted pull-right">
                  <div class="dropdown">
                    <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                    <span style="color: #000">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                  </a>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Moficiar Informacion</a></li>
                      <li><a href="#">Actualizar licencia</a></li>
                      <li><a href="#">Eliminar chofer</a></li>
                    </ul>
                  </div>
                </span>
                  </span><!-- /.username -->
                  200 Recorridos
                </div>
              </div>
              <!-- /.box-comment -->
            </div>
            <div class="box-footer box-comments" style="margin-top: 5px">
              <div class="box-comment">                
                <img class="img-circle img-sm" src="<?= base_url() ?>assets/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    Escorpion dorado
                    <span class="text-muted pull-right">
                  <div class="dropdown">
                    <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                    <span style="color: #000">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                  </a>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Moficiar Informacion</a></li>
                      <li><a href="#">Actualizar licencia</a></li>
                      <li><a href="#">Eliminar chofer</a></li>
                    </ul>
                  </div>
                </span>
                  </span><!-- /.username -->
                  200 Recorridos
                </div>
              </div>
              <!-- /.box-comment -->
            </div>
            <div class="box-footer box-comments" style="margin-top: 5px; background-color: #E97639">
              <div class="box-comment">                
                <img class="img-circle img-sm" src="<?= base_url() ?>assets/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    Ya sabes quien
                    <span class="text-muted pull-right">
                  <div class="dropdown">
                    <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                    <span style="color: #000">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                  </a>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Moficiar Informacion</a></li>
                      <li><a href="#">Actualizar licencia</a></li>
                      <li><a href="#">Eliminar chofer</a></li>
                    </ul>
                  </div>
                </span>
                  </span><!-- /.username -->
                  200 Recorridos
                </div>
              </div>
              <!-- /.box-comment -->
            </div>
          </div>
          </div>
        </div>
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?= $footer ?>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>bower_components/admin-lte/dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/icheck.min.js"></script>
<!-- toggle -->
<script src="<?= base_url() ?>bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<!-- Page script -->
<script>
  $(function() {
    $('#toggle-event').change(function() {
      if ($(this).prop('checked')) {
        var status = " Activado";
      }else var status = " Desactivado";
      $('#console-event').html(status)
    })
  })
</script>
<script>
  $(function () {
    

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

  })
</script>
</body>
</html>
