<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Soda</title>
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
  <!-- estilos -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
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
        Alta Usuarios y Cuentas
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Conductores</a></li>
        <li class="active">Alta</li>
      </ol>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Nueva estacion</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="col-md-6">
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="estcion">Estacion</label>
                    <input type="text" class="form-control" id="estacion" placeholder="Estacion ...">
                  </div>
                  <div class="form-group">
                    <label for="edad">Telefono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono ...">
                  </div>
                  <div class="form-group">
                    <label for="ife">Encargado</label>
                    <input type="text" class="form-control" id="encargado" placeholder="Encargado ...">
                  </div>
                  <div class="form-group">
                    <label for="ife">Direccion</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Direccion ...">
                  </div>
                  <div class="form-group">
                    <label>
                      <input id="toggle-event" type="checkbox" checked data-toggle="toggle" data-size="small" data-style="ios"> 
                        <font id="console-event"></font>
                    </label>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <div id="map" style="width:100%;height:290px;"></div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
          </div>
        </div>
      </div>    
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Estaciones</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <div class="box-footer box-comments">
                <div class="box-comment">                
                  <div class="product-img">
                    <span style="margin-left: 10px;"><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Heroica Ciudad de Tlaxiaco
                      <span class="text-muted pull-right">
                    <div class="dropdown" style="margin-top: 10px">
                      <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                      <span style="color: #000">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    </a>
                      <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-toggle="modal" data-target=".updateUser">Actualizar estacion</a></li>
                        <li><a href="#" data-toggle="modal" data-target=".deleteUser">Eliminar estacion</a></li>
                      </ul>
                    </div>
                  </span>
                    </span>
                    Telefono: (953) 111 22 33
                  </div>
                </div>
              </div>
              <div class="box-footer box-comments" style="margin-top: 5px">
                <div class="box-comment">                
                  <div class="product-img">
                    <span style="margin-left: 10px;"><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Oaxaca de Juarez
                      <span class="text-muted pull-right">
                    <div class="dropdown" style="margin-top: 10px">
                      <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                      <span style="color: #000">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    </a>
                      <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-toggle="modal" data-target=".updateUser">Actualizar estacion</a></li>
                        <li><a href="#" data-toggle="modal" data-target=".deleteUser">Eliminar estacion</a></li>
                      </ul>
                    </div>
                  </span>
                    </span>
                    Telefono: (953) 111 22 33
                  </div>
                </div>
              </div>
              <!-- /.item -->
              <div class="box-footer box-comments" style="margin-top: 5px">
                <div class="box-comment">                
                  <div class="product-img">
                    <span style="margin-left: 10px;"><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Santiago Yolomecalt
                      <span class="text-muted pull-right">
                    <div class="dropdown" style="margin-top: 10px">
                      <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                      <span style="color: #000">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    </a>
                      <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-toggle="modal" data-target=".updateUser">Actualizar estacion</a></li>
                        <li><a href="#" data-toggle="modal" data-target=".deleteUser">Eliminar estacion</a></li>
                      </ul>
                    </div>
                  </span>
                    </span>
                    Telefono: (953) 111 22 33
                  </div>
                </div>
              </div>
              <!-- /.item -->
              <div class="box-footer box-comments" style="margin-top: 5px">
                <div class="box-comment">                
                  <div class="product-img">
                    <span style="margin-left: 10px;"><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Teposcolula
                      <span class="text-muted pull-right">
                    <div class="dropdown" style="margin-top: 10px">
                      <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                      <span style="color: #000">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    </a>
                      <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-toggle="modal" data-target=".updateUser">Actualizar estacion</a></li>
                        <li><a href="#" data-toggle="modal" data-target=".deleteUser">Eliminar estacion</a></li>
                      </ul>
                    </div>
                  </span>
                    </span>
                    Telefono: (953) 111 22 33
                  </div>
                </div>
              </div>
            </ul>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">Ver todas las estaciones</a>
          </div>
          <!-- /.box-footer -->
        </div>
      </div>
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <div>    
    <div class="modal fade deleteUser" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="font-weight: bold;color: #393737">Eliminar Estacion</h4>
              </div>
              <div class="col-md-12" style="margin-top: 20px">
                <div class="alert  alert-dismissible fade in" role="alert" style="background-color: #F7BFB0">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
                    <strong style="font-weight: bold;color: #DC1D0D"><center><i class="fa fa-warning" style="width: 20px"></i> Esta accion eliminara permanentamente todos los datos de esta estacion (incluidos datos anidados).</center></strong> 
                 </div>
            </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="border: 0">Cancelar</button>
            <button type="button" class="btn btn-primary" style="background-color:#DC1D0D;border: 0">Eliminar</button>
          </div>

        </div>
      </div>
    </div>
    <!-- end modale -->
    <div class="modal fade updateUser" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar datos estacion</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="unidad">Estacion</label>
                  <input type="text" class="form-control" id="estacionUp" placeholder="Estacion">
                </div>
                <div class="form-group">
                  <label for="marca">Telefono</label>
                  <input type="text" class="form-control" id="telefono" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <label for="marca">Encargado</label>
                  <input type="text" class="form-control" id="encargado" placeholder="Encargado">
                </div>
                <div class="form-group">
                  <label for="marca">Direccion</label>
                  <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Actualizar</button>
          </div>

        </div>
      </div>
    </div>
    <!-- end modale -->
   <!--  <div class="modal fade addUser" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nueva Cuenta</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre completo</label>
                  <input type="email" class="form-control" id="nombre" placeholder="Numero de la Unidad">
                </div>
                <div class="form-group">
                  <label for="estacion">Estacion</label>
                  <input type="password" class="form-control" id="estacionup" placeholder="Marca, Modelo y Año">
                </div>
                <div class="form-group">
                  <label for="nacimiento">Fecha Nacimiento</label>
                  <input type="password" class="form-control" id="nacimiento" placeholder="Marca, Modelo y Año">
                </div>
                <div class="form-group">
                  <label>Anexe cualquier informacion necesaria *</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
          </div>

        </div>
      </div>
    </div> -->
    <!-- end modale -->
  </div>

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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>bower_components/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- toggle -->
<script src="<?= base_url() ?>bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<!-- Page script -->
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>
