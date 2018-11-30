    <!-- Vista del contenido de las estaciones -->
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
              <div class="box-footer box-comments box-comentarios">
                <div class="box-comment">                
                  <div class="product-img box-icono">
                    <span><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Heroica Ciudad de Tlaxiaco
                      <span class="text-muted pull-right">
                        <div class="dropdown" style="margin-top: 10px">
                          <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="color-icono">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                          </a>
                          <ul class="dropdown-menu pull-right box-dropdown" aria-labelledby="dropdownMenu1">
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
              <!--  -->
              <div class="box-footer box-comments box-comentarios">
                <div class="box-comment">                
                  <div class="product-img box-icono">
                    <span><i class="fa fa-2x fa-map-marker"></i></span>
                  </div>
                  <div class="comment-text">
                    <span class="username">
                      Heroica Ciudad de Tlaxiaco
                      <span class="text-muted pull-right">
                        <div class="dropdown" style="margin-top: 10px">
                          <a class="btn btn-box-tool dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="color-icono">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                          </a>
                          <ul class="dropdown-menu pull-right box-dropdown" aria-labelledby="dropdownMenu1">
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
              <!--  -->
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
    <!-- Incio de los modales -->
    <div>    
      <!-- Modal de estaciones para eliminar estacion -->
      <div class="modal fade deleteUser" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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
      <!-- MOdal de estaciones para actualizar estacion -->
      <div class="modal fade updateUser" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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
    </div>