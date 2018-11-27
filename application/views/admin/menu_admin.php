<!-- INICIO DEL MENU -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU DE OPCIONES</li>
  <li class="<?php if(!empty($user)){ echo $user; } ?>">
    <a href="<?= base_url() ?>inicio">
      <i class="fa fa-users"></i> <span>Usuarios y Cuentas</span>
    </a>
  </li>
  <!-- <li class="treeview <?php if(!empty($estacion)){ echo $estacion; } ?>">
    <a href="#">
      <i class="fa fa-map-marker"></i> <span>Estaciones y Destino</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= base_url() ?>estaciones"><i class="fa fa-circle-o"></i> Estaciones</a></li>
      <li><a href="<?= base_url() ?>app"><i class="fa fa-circle-o"></i> Destino</a></li>
    </ul>
  </li> -->
  <li class="<?php if(!empty($estacion)){ echo $estacion; } ?>">
    <a href="<?= base_url() ?>estaciones">
      <i class="fa fa-map-marker"></i> <span>Estaciones y Destino</span>
    </a>
  </li>
  <li class="<?php if(!empty($unidad)){ echo $unidad; } ?>">
    <a href="<?= base_url() ?>transporte">
      <i class="fa fa-bus"></i> <span>Unidades de Transporte</span>
    </a>
  </li>
  <li class="<?php if(!empty($choferes)){ echo $choferes; } ?>">
    <a href="<?= base_url() ?>chofer">
      <i class="fa fa-credit-card"></i> <span>Choferes</span>
    </a>
  </li>
  <li class="treeview <?php if(!empty($corridas)){ echo $corridas; } ?>">
    <a href="#">
      <i class="fa fa-road"></i> <span>Corridas</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if(!empty($transito)){ echo $transito; } ?>"><a href="<?= base_url() ?>corridas"><i class="fa fa-circle-o"></i> En espera</a></li>
      <li class="<?php if(!empty($historial)){ echo $historial; } ?>"><a href="<?= base_url() ?>corridas"><i class="fa fa-circle-o"></i> Realizadas</a></li>
    </ul>
  </li>
  <!-- <li class="<?php if(!empty($corridas)){ echo $corridas; } ?>">
    <a href="<?= base_url() ?>corridas">
      <i class="fa fa-clock-o"></i> <span>Corridas</span>
    </a>
  </li> -->
  <li class="<?php if(!empty($paquetes)){ echo $paquetes; } ?>">
    <a href="<?= base_url() ?>paqueteria">
      <i class="fa fa-archive"></i> <span>Paqueteria</span>
    </a>
  </li>
  <li class="<?php if(!empty($reporte)){ echo $reporte; } ?>">
    <a href="<?= base_url() ?>reporte" target="_black">
      <i class="fa fa-file-text-o"></i> <span>Reportes</span>
    </a>
  </li>
  <li class="header">AJUSTES</li>
  <li class="<?php if(!empty($config)){ echo $config; } ?>">
    <a href="<?= base_url() ?>#" target="_black">
      <i class="fa fa-gears"></i> <span>Configuraciones</span>
    </a>
  </li>
</ul> 
</section>
    <!-- /.sidebar -->
</aside>
 <!-- ==================FIN DEL MENU============================= -->  