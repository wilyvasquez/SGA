    <!-- Vista de contenido de los choferes -->
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