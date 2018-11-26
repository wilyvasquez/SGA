          <!-- Vista del contenido para las unidades de transporte -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- checkbox -->
                  <!-- <input type="checkbox" value=""> -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- <input type="checkbox" value=""> -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- <input type="checkbox" value=""> -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- <input type="checkbox" value=""> -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- <input type="checkbox" value=""> -->
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
                      <!-- <span class="">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>    -->
                  <!-- <input type="checkbox" value=""> -->
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
          <!-- Inicio de los modales para transporte -->
          <div>    
            <!-- Modal para eliminar unidad de transporte -->
            <div class="modal fade bs-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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
            <!-- Modal para editar unidades de transporte -->
            <div class="modal fade editarunidad" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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
            <!-- Modal para agregar unidad de tranporte -->
            <div class="modal fade addtransporte" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
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