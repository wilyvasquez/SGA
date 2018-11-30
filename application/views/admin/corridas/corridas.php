<!-- Vista de contenido de las corridas -->
<div class="row">
  <div class="col-md-8">
    <div class="box box-primary">
      <?= $info ?>           
      <div class="box-body">
        <div class="row">
          <div class="col-md-2">
            <p><strong>LEYENDAS</strong></p>
            <div>
              <div class="disponible"> </div>
              <div class="text margenes"> Disponible</div>
            </div>
            <div class="margen">
              <div class="ocupado"> </div>
              <div class="text margenes"> Ocupado</div>
            </div>
            <div class="margen">
              <div class="selectc"> </div>
              <div class="text margenes">Seleccionado</div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <?= $bus ?>
        </div>
      </div>
      <div class="box-footer clearfix">
       <button type="button" data-toggle="modal" data-target=".corrida" class="btn btn-primary pull-right">Salida</button>
      </div>
    </div>
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <div class="box box-primary">    
      <div class="box-header with-border">
        <h3 class="box-title">Corridas del dia</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-ellipsis-v"></i>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li><a href="#">Agregar corrida</a></li>
            <li><a href="#">Limpiar corridas</a></li>
          </ul>
        </div>
      </div>       
      <div class="box-body">
        <?= $viajes ?>
      </div>
    </div>
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- incio modal -->
<div class="modal fade corrida" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Datos de pasajero</h4>
      </div>
      <form role="form">
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <label for="nombre">Nombre completo</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre del pasajero" required>
            </div>
            <div class="form-group">
              <label>Observaciones</label>
              <textarea class="form-control" rows="3" placeholder="Observaciones ..."></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Cobrar</button>
        </div>
      </form>

    </div>
  </div>
</div>