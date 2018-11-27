      <!-- Vista de contenido de las corridas -->
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <dl>
                <dt>SALIDA <span class="label label-success">Abordando</span></dt>
                <dd>Oaxaca de Juarez - Heroica Ciudad de Tlaxiaco</dd>
                <dd><strong>DIA:</strong> Martes 03 de Abril 2018 <strong style="margin-left: 10px">HORA: </strong> 22:15</dd>
              </dl>
            </div>            
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
                <div class="col-md-12">
                  <div class="scroll">
                    <div class="contenedor">
                      <img src="<?= base_url() ?>assets/img/buss.png" width="700"><br><br><br>
                      <!-- Asientos del lado del conductor -->
                      <table class="asiento-front">
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">2</td>
                        </tr>
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                      </table>
                      <!-- Asientos solos del lado de la puerta -->
                      <table class="asiento-left">
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">2</td>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                      </table>
                      <!-- asientos en pares -->
                      <table class="texto-encima">
                        <tr>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">2</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">3</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">4</td>
                       </tr>
                        <tr>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">2</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">3</td>
                         <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">4</td>
                       </tr>
                      </table>
                      <!-- asientos traseros 4 -->
                      <table class="asiento-atras">
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                        <tr>
                          <td style="background: url('<?= base_url() ?>assets/img/asiento.jpg') no-repeat center center;background-size:50px">1</td>
                        </tr>
                      </table>

                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="box-footer clearfix">
             <button type="button" class="btn btn-primary pull-right">Salida</button>
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
              <div class="container-fluid" style="color:white;background-color: #127612;border-radius: 10px;border: 1px solid black;border-color: #DBDEDF;">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" style="color: white" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar Corrida</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px; color: white">ASIENTOS</a>
              </div>
              <div class="container-fluid" style="background-color: #F1EFEF;border-radius: 15px;border: 1px solid black;border-color: #DBDEDF;margin-top: 5px">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar licencia</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px">ASIENTOS</a>
              </div>
              <div class="container-fluid" style="background-color: #F1EFEF;border-radius: 15px;border: 1px solid black;border-color: #DBDEDF;margin-top: 5px">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar licencia</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px">ASIENTOS</a>
              </div>
              <div class="container-fluid" style="background-color: #F1EFEF;border-radius: 15px;border: 1px solid black;border-color: #DBDEDF;margin-top: 5px">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar licencia</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px">ASIENTOS</a>
              </div>
              <div class="container-fluid" style="background-color: #F1EFEF;border-radius: 15px;border: 1px solid black;border-color: #DBDEDF;margin-top: 5px">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar licencia</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px">ASIENTOS</a>
              </div>
              <div class="container-fluid" style="background-color: #F1EFEF;border-radius: 15px;border: 1px solid black;border-color: #DBDEDF;margin-top: 5px">
                <div class="col-md-3" style="float: left">
                  <center>
                    <dl>
                      <dt>SALIDA</dt>
                      <dd>07:00</dd>
                      <dt>HRS</dt>
                      <dd>LOCAL</dd>
                    </dl>
                  </center>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-10" style="float: left">
                  <dl>
                    <dt>DESTINO</dt>
                    <dd>Tlaxiaco</dd>
                    <dd>PASAJEROS 13/16</dd>
                  </dl>
                </div>
                <div style="float: left;width: 5px">
                  <div style="margin-top: 35px">
                    <div class="dropdown">
                      <a type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                        <i class="fa fa-2x fa-ellipsis-v"></i>
                      </a>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Modificar Informacion</a></li>
                        <li><a href="#">Actualizar licencia</a></li>
                        <li><a href="#">Eliminar Corrida</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <a href="#" class="pull-right" style="margin-right: 40px">ASIENTOS</a>
              </div>

            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->