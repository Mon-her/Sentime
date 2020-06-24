<?php
 require_once '../utili/sesion.php';

?>
<?php
  
 require_once '../utili/Conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horarios SENA</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
    <style>
        #des1{
            color: gainsboro;
        }
        #des0{
            color: #73879C;
        }
    </style>
      <script type="text/javascript">
      
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
                <h3>Perfil de Instructores</h3>
              </div>

              <div class="title_right">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row" style="margin-left: -20px; margin-right: -20px" >
    <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                        <div>
                        <label><h5>Recuerde:</h5>Los datos que aparecen en color gris están habilitados para el uso en la creción del horario<br> Los datos que aparecen en color <label style="color: gainsboro;">gainsboro </label> están dehabilitados para esta función.</label>
                    </div>
</div>
    </div>
    </div>
            
            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="#">A</a></li>
                          <li><a href="#">B</a></li>
                          <li><a href="#">C</a></li>
                          <li><a href="#">D</a></li>
                          <li><a href="#">E</a></li>
                          <li>...</li>
                          <li><a href="#">W</a></li>
                          <li><a href="#">X</a></li>
                          <li><a href="#">Y</a></li>
                          <li><a href="#">Z</a></li>
                        </ul>
                      </div>

                      
                             <?php
                               require_once '../utili/Conexion.php';
                            $sql1="SELECT *, persona.estado as co FROM persona";
                            $query=$mysqli->query($sql1);
                              if ($query->num_rows>=1){?>
                                <?php foreach ($query as $key) {
                                    $datos=$key['documento'];
                                    ?>
                               <div class="col-md-55">
                          
                          <div class="well profile_view" id="des<?php echo $key['co']; ?>">
                            <div class="mask">
                              <h2 class="brief"><i class="fa fa-user"></i><i> Instructor</i></h2>
                              <br>
                              <div>
                              <h4 class="brief"> <?php echo $key['nombre'];?> <?php echo $key['apellido'];?></h4>
                              <br>
                              <strong>Especialidad: </strong> Diseñador Grafico 
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope-o"></i> E-mail: <?php echo $key['email'];?></li>
                              </ul>
                              <br>
                              <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px; color: #73879C;" type="button" class="btn" data-toggle="modal" data-target="#dataHabi" onclick="estadoh('<?php echo $datos?>')"><i class="fa fa-check" style="margin-left: -5px" ></i></button>
                                <button style="border-radius: 50%; width: 33px; height: 33px; margin-top: -5px; margin-bottom: -5px; color: #73879C;" type="button" class="btn" data-toggle="modal" data-target="#dataDeshabi" onclick="estadod('<?php echo $datos?>')"><i class="fa fa-close" style="margin-left: -3px"></i></button>
                            </div>
                            </div>
                          </div>
                          
                      </div>
                      <?php }
                    ?>
                 <?php }else{
                              echo "Tabla vacía";
                          }
                          ?>
                       <form action="Deshabilitar/DeshabilitarPersona.php" method="post"> 
                    <div class="modal fade" id="dataDeshabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Deshabilitar Contacto</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idd" id="idd" hidden="" >
                              </div>

                              <label>¿Está seguro de que quiere deshabilitar el contacto?</label>

                              <div class="modal-footer">
                                <button id="comsea" style="margin: 10px" type="submit"  class="btn btn-dark">Deshabilitar</button>

                                <button type="button" class="btn btn-light" data-dismiss="modal" >Cerrar</button>
                                </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
                    <form action="Habilitar/HabilitarPersona.php" method="post"> 
                    <div class="modal fade" id="dataHabi" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Habilitar Persona</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="number"  name="idh" id="idh" hidden="" >
                              </div>
                              <label>¿Está seguro de que quiere habilitar el contacto?</label>

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
                  </div>


        <!-- /page content -->

        <!-- footer content -->
<?php 
   require_once 'footer.php';
?>
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>