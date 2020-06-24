<?php 
   require_once '../utili/sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
<?php 
   require_once 'head.php';
?>
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
                    <h2>Bloque</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> 
                  
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="card-box table-responsive">
                            <?php
                              require_once '../utili/Conexion.php';
                            
                            $sql1="SELECT * FROM bloque,aula,persona,ficha where bloque.persona_documento=persona.documento and bloque.aulaid_aula=aula.id_aula and bloque.fichanumero_ficha=ficha.numero_ficha";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <div class="container">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                              <th>Aula</th>    
                              <th>Rango de horas</th> 
                              <th>Día</th>
                              <th>Trimestre</th>
                              <th>Año</th>
                              <th>Ficha</th>
                              <th>Instructor</th>
                              <th>Actualizar</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($query as $key) {
                                
                     ?>
                             <tr>
                             <td><?php echo $key['id_aula']; ?></td>
                             <td><?php echo $key['rango_horas']; ?></td>
                            <td><?php echo mb_strtoupper($key['dia']);?></td>
                            <td><?php echo $key['trimestre']; ?></td>
                            <td><?php echo $key['anio']; ?></td>
                            <td><?php echo $key['numero_ficha']; ?></td>
                            <td><?php echo mb_strtoupper($key['nombre']);?></td>
                             <td>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px" type="button" class="btn btn-info"  data-toggle="modal" data-target="#dataUpdate" action=""><i class="fa fa-edit" style="margin-left: -4px;"></i></button>
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
                <form action="Actualizar/ActualizarBloque.php" method="post"> 
                    <div class="modal fade" id="dataUpdate" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Registrar Bloques</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                          <div class="modal-body">
                            <div class="form-group">
                            <input type="text" name="dia" class="form-control" placeholder="Dia">
                              </div>  
                              <div class="form-group">
                            <input type="number" name="trimestre" class="form-control" placeholder="Trimestre">
                              </div>  
                              <div class="form-group">
                                <label>Rango de Horas</label> 
                                  <select name="rango_horas" class="form-control" type="time">
                                      <option value="0">Seleccionar</option>
                                      <option value="1">6:00-7:40</option>
                                      <option value="2">8:00-9:40</option>
                                      <option value="3">10:00-11:40</option>
                                      <option value="4">12:00-13:40</option>
                                      <option value="5">14:20-16:00</option>
                                      <option value="6">16:20-18:00</option>
                                      <option value="7">18:15-19:45</option>
                                      <option value="8">20:00-21:40</option>
                                  </select>
                              </div>
                                      <div class="form-group">
                                <label>Persona</label> 
                                  <select name="persona_documento" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM persona");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[documento].'">'.$valores[nombre].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Numero de Ficha</label> 
                                  <select name="fichanumero_ficha" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM ficha");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[numero_ficha].'">'.$valores[numero_ficha].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                               <div class="form-group">
                                <label>Aula</label> 
                                  <select name="aulaid_aula" class="form-control" required="">
                                      <option value="0">Seleccionar</option>
                                      <?php
                                      require_once '../utili/Conexion.php';
                                      $query=$mysqli->query("SELECT * FROM aula");
                                      while($valores=mysqli_fetch_array($query)){
                                          echo '<option value="'.$valores[id_aula].'">'.$valores[id_aula].'</option>';
                                          }
                                      ?>
                                  </select>
                              </div>
                              <div class="modal-footer">
                              <label >Año:</label>
                              <input type="number" name="anio" class="form-control" placeholder="Año"> 
                            </div>  
                            <button style="margin: 10px" type="submit" class="btn btn-dark">Registrar</button>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                            </div>

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