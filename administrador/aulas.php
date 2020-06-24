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
      $('#idu').val(d[0]);
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
                    <h2>Aulas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
       
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" action="">Registrar aula</button>
                  <form action="Guardar/GuardarAula.php" method="post"> 
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Registrar Aula</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                              <input type="number"  name="id" class="form-control" placeholder="Número del aula">
                              </div>
                              <label>Descripcion</label>
                              <div class="form-group">
                                <select name="descripcion" class="form-control" required="">
                                <option value="0">Seleccionar</option>
                                <?php
                                  require_once '../utili/Conexion.php';
                                  $query=$mysqli->query("SELECT * FROM descripcion_aula");
                                  while($valores=mysqli_fetch_array($query)){
                                      echo '<option value="'.$valores[id_descripcion].'">'.$valores[descripcion].'</option>';
                                      }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Sede a la que pertenece</label> 
                                <select name="sede" class="form-control" required="">
                                  <option value="0">Seleccionar</option>
                                  <?php
                                    require_once '../utili/Conexion.php';
                                    $query=$mysqli->query("SELECT * FROM sede");
                                    while($valores=mysqli_fetch_array($query)){
                                        echo '<option value="'.$valores[id_sede].'">'.$valores[nombre].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

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
                            
                            $sql1="SELECT *, aula.estado as e FROM aula,descripcion_aula,sede where aula.id_descripcion=descripcion_aula.id_descripcion and aula.sedeid_sede=sede.id_sede";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                <th>Número</th> 
                              <th>Descripcion</th>
                              <th>Sede</th>
                              <th>Actualizar</th>
                              <th>Habilitar/Deshabilitar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                    $datos=$key['id_aula']."||".
                                    $key['descripcion']."||".
                                    $key['nombre']."||".
                                    $key['estado'];

                             ?>
                                <tr class="des<?php echo $key['e']; ?>">
                             <td ><?php echo  mb_strtoupper($key['id_aula']); ?></td>
                             <td ><?php echo  mb_strtoupper($key['descripcion']); ?></td>
                            <td ><?php echo  mb_strtoupper($key['nombre']); ?></td>
                                <td>
                                
                             
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos?>')"><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
                                   </td>
                                <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px" ></i></button>
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
              <form action="Actualizar/ActualizarAula.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Actualizar Aula</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                              <input type="number"  name="idu" id="idu" class="form-control">
                              </div>
                              <label>Descripcion</label>
                              <div class="form-group">
                                <select name="descripcionu" id="descripcionu"class="form-control" required="">
                                <option value="0">Seleccionar</option>
                                <?php
                                  require_once '../utili/Conexion.php';
                                  $query=$mysqli->query("SELECT * FROM descripcion_aula");
                                  while($valores=mysqli_fetch_array($query)){
                                      echo '<option value="'.$valores[id_descripcion].'">'.$valores[descripcion].'</option>';
                                      }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Sede a la que pertenece</label> 
                                <select name="sedeu" id="sedeu" class="form-control" required="">
                                  <option value="0">Seleccionar</option>
                                  <?php
                                    require_once '../utili/Conexion.php';
                                    $query=$mysqli->query("SELECT * FROM sede");
                                    while($valores=mysqli_fetch_array($query)){
                                        echo '<option value="'.$valores[id_sede].'">'.$valores[nombre].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>

                              <div class="modal-footer">
                                <button style="margin: 10px" type="submit" class="btn btn-dark">Actualizar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <form action="Deshabilitar/DeshabilitarAula.php" method="post"> 
                    <div class="modal fade" id="dataDeshabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Aula</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idd" id="idd" hidden="" >
                              </div>

                              <label>¿Está seguro de que quiere deshabilitar el aula?</label>

                              <div class="modal-footer">
                                <button id="comsea" style="margin: 10px" type="submit"  class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <form action="Habilitar/HabilitarAula.php" method="post"> 
                    <div class="modal fade" id="dataHabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Habilitar Aula</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere habilitar el aula?</label>

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