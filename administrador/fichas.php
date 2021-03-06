<?php
  
 require_once '../utili/sesion.php';
        
?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <?php 
   require_once 'head.php';
?>
    <style>
        .des1{
            color: gainsboro;
        }
        .des0{
            color: black;
        }
    </style>
    <script type="text/javascript">
        function agregaform(datos){
            d=datos.split('||');
            $('#numero_fichau').val(d[0]);
            $('#iniciou').val(d[1]);
            $('#finalu').val(d[2]);
        }
        function estadoh(datos){
      d=datos.split('||');
      $('#idh').val(d[0]);
      }
      function estadod(datos){
      d=datos.split('||');
      $('#idd').val(d[0]);
      }
    </script>
  </head>

  <?php
  
  require_once 'menu.php';

?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CENIGRAF <small>Información para la creación de horarios</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                        <div>
                        <label><h5>Recuerde:</h5>Los datos que aparecen en color <label style="color: black">negro </label> están habilitados para el uso en la creción del horario<br> Los datos que aparecen en color <label style="color: gainsboro;">gainsboro </label> están dehabilitados para esta función.</label>
                    </div>
</div>
    </div>
    </div>        
            <div class="row">
    

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Fichas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal5" action="">Registrar Fichas</button>
                  <form action="Guardar/GuardarFicha.php" method="post">
                    <div class="modal fade" id="myModal5" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Fichas</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input name="numero_ficha" class="form-control" placeholder="Numero ficha">
                              </div>  
                              <div class="modal-footer">
                              <label for="inicio">Fecha de inicio:</label>
                              <input type="date" id="inicio" name="inicio" class="form-control"> 
                            </div>  
                            <div class="modal-footer">
                              <label for="final">Fecha de finalizacion:</label>
                              <input type="date" id="final" name="final" class="form-control"> 
                            </div>  
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

                  </div>
                  </div>
                  </div>
                  </div>
                  </form> 
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                         <?php
                             require_once '../utili/Conexion.php';
                            
                            $sql1="SELECT *, ficha.estado as f FROM ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Numero ficha</th> 
                              <th>Fecha de inicio</th>
                              <th>Fecha de finalización</th>
                              <th>Actualizar</th>
                              <th>Habilitar/Deshabilitar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                              $datos=$key['numero_ficha']."||".
                                    $key['ingreso']."||".
                                    $key['salida'];
                             ?>
                             <tr class="des<?php echo $key['f']; ?>">
                             <td><?php echo $key['numero_ficha']; ?></td>
                             <td><?php echo $key['ingreso']; ?></td>
                            <td><?php echo $key['salida']; ?></td>
                            <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                </td>
                                <td>
                                 <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px"></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                                </td>
                                </tr>
                            <?php }
    
                             ?>
                            </tbody>
                            </table>
                            <?php
                          }else{
                              echo "Tabla vacía";
                          }
                          ?>
                    </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <form action="Actualizar/ActualizarFicha.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Actualizar Ficha</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                            <input name="numero_fichau" id="numero_fichau" class="form-control" placeholder="Numero ficha">
                              </div>  
                              <div class="form-group">
                              <label for="inicio">Fecha de inicio:</label>
                              <input type="date" id="iniciou" name="iniciou" class="form-control"> 
                            </div>  
                            <div class="form-group">
                              <label for="final">Fecha de finalizacion:</label>
                              <input type="date" id="finalu" name="finalu" class="form-control"> 
                            </div>
                            
                             
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Actualizar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                <form action="Deshabilitar/DeshabilitarFicha.php" method="post"> 
                    <div class="modal fade" id="dataDeshabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Ficha</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idd" id="idd" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere deshabilitar la ficha?</label>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                <form action="Habilitar/HabilitarFicha.php" method="post"> 
                    <div class="modal fade" id="dataHabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Habilitar Ficha</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere habilitar la ficha?</label>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Habilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
<?php 
   require_once 'footer.php';
?>
        <!-- /footer content -->
<?php 
   require_once 'archivos_js.php';
?>
</html>