<?php
  
  require_once '../utili/sesion.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <?php 
   require_once 'head.php';
?>
     <script type="text/javascript">
        function agregaform(datos){
            d=datos.split('||');
            $('#idu').val(d[0]);
            $('#lectivau').val(d[1]);
            $('#productivau').val(d[2]);
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
                  <div class="x_title">
                    <h2>Duración</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <button style="margin: 10px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal10" action="">Registrar Duración</button>
                  <form action="Guardar/GuardarDuracion.php" method="post">
  <div class="modal fade" id="myModal10" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Duracion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
          <input type="text" name="lectiva" class="form-control" placeholder="Meses lectiva"></textarea>
            </div>  
            <div class="form-group">
          <input type="text" name="productiva" class="form-control" placeholder="Meses Productiva"></textarea>
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
                            
                            $sql1="SELECT * FROM duracion ";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Id</th>    
                               <th>Meses lectiva</th>
                               <th>Meses productiva</th>
                              <th>Actualizar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                              $datos=$key['id_duracion']."||".
                                        $key['meses_lectiva']."||".
                                        $key['meses_productiva'];
                             ?>
                             <tr>
                             <td><?php echo $key['id_duracion']; ?></td>
                             <td><?php echo $key['meses_lectiva']; ?></td>
                             <td><?php echo $key['meses_productiva']; ?></td>
                             <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" onclick="agregaform('<?php echo $datos?>')" ><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
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
                <form action="Actualizar/ActualizarDuracion.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Actualizar Competencia</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                              <input type="text"  name="idu" id="idu" hidden="">
                                <input type="text" name="lectivau" id="lectivau"class="form-control" placeholder="Meses lectiva"></textarea>
                                  </div>  
                                  <div class="form-group">
                                <input type="text" name="productivau" id="productivau"class="form-control" placeholder="Meses Productiva"></textarea>
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