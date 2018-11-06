<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Plataforma</title>
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
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/dist/css/skins/_all-skins.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/plugins/iCheck/all.css">
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
          <!-- Messages-->
          <?= $messages ?>
          <!-- Notifications-->
          <?= $notification ?>
          <!-- Tasks -->
          <?= $tasks ?>
          <!-- User logout -->
          <?= $logout ?>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->
  <!-- perfil -->
  <?= $perfil ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Unidades de transporte
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#">transporte</a></li>
        <li class="active">Alta</li>
      </ol>
    </section>
    
    <section class="content">
      <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-android-bus"></i>

              <h3 class="box-title">Unidades de Transporte</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <span class="">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <div class="tools">
                    <a href="#" data-toggle="modal" data-target=".editarunidad">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target=".addtransporte">
                <i class="fa fa-plus"></i> Agregar</button>
            </div>
          </div>
          <!-- /.box -->     
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <div>    
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="font-weight: bold;color: #393737">Eliminar unidad de transporte</h4>
              </div>
              <div class="col-md-12" style="margin-top: 20px">
                <div class="alert  alert-dismissible fade in" role="alert" style="background-color: #F7BFB0">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  </button>
                  <strong style="font-weight: bold;color: #DC1D0D"><center><i class="fa fa-warning" style="width: 20px"></i> Esta accion eliminara permanentamente todos los datos de esta unidad (incluidos datos anidados).</center></strong> 
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
    <div class="modal fade editarunidad" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Unidad de transporte</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="unidad">Numero de la Unidad</label>
                  <input type="email" class="form-control" id="numero" placeholder="Numero de la Unidad">
                </div>
                <div class="form-group">
                  <label for="marca">Marca, Modelo y Año</label>
                  <input type="password" class="form-control" id="marca" placeholder="Marca, Modelo y Año">
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
    <div class="modal fade addtransporte" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nueva Unidad de transporte</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Numero de la Unidad</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Numero de la Unidad">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Marca, Modelo y Año</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Marca, Modelo y Año">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modale -->
  </div>

  <?= $footer ?>
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
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
  <!-- Page script -->
  <script src="<?= base_url() ?>assets/js/function.js"></script>
</body>
</html>
