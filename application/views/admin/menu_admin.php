<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU DE OPCIONES</li>
  <li class="<?php if(!empty($user)){ echo $user; } ?>">
    <a href="<?= base_url() ?>user">
      <i class="fa fa-users"></i> <span>Usuarios y Cuentas</span>
    </a>
  </li>
  <li class="treeview <?php if(!empty($estacion)){ echo $estacion; } ?>">
    <a href="#">
      <i class="fa fa-map-marker"></i> <span>Estaciones y Destino</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?= base_url() ?>station"><i class="fa fa-circle-o"></i> Estaciones</a></li>
      <li><a href="<?= base_url() ?>app"><i class="fa fa-circle-o"></i> Destino</a></li>
    </ul>
  </li>
  <li class="<?php if(!empty($unidad)){ echo $unidad; } ?>">
    <a href="<?= base_url() ?>trans">
      <i class="fa fa-bus"></i> <span>Unidades de Transporte</span>
    </a>
  </li>
  <li class="<?php if(!empty($choferes)){ echo $choferes; } ?>">
    <a href="<?= base_url() ?>Chofer">
      <i class="fa fa-id-card"></i> <span>Choferes</span>
    </a>
  </li>
  <li class="<?php if(!empty($corridas)){ echo $corridas; } ?>">
    <a href="<?= base_url() ?>app">
      <i class="fa fa-clock-o"></i> <span>Corridas</span>
    </a>
  </li>
  <li class="<?php if(!empty($reporte)){ echo $reporte; } ?>">
    <a href="<?= base_url() ?>reporte" target="_black">
      <i class="fa fa-file-text-o"></i> <span>Reportes</span>
    </a>
  </li>
</ul>
</section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->