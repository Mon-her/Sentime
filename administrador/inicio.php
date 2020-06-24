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
                  <h3>Inicio</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2 col-sm-2  profile_left" style="margin-left: -50px;">
                     

                      <!-- start skills -->
                  
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">
                      <!-- start of user-activity-graph -->
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Introducción</a>
                          </li>
                          
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Actualización de datos</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <br>
                            <br>
                            <center><div class="login"><h1>Bienvenidos a SenTime</h1> </div></center>
                            <br>
                            <h3>Bienvenidos a sentime en estos momentos te encuentras en el rol de administrador cuyas funcionalidades hacen que dependan
                            de la creacion de los horarios estas son: ingreso de los datos, actualizacion de los datos y la eliminacion de los mismos.
                            <br>
                            <br>
                            Cualquier duda o problema con el aplicativo y el rol del administrador podra encontrar los pdf a continuacion: </h3>
                            <br>
                            <div>
                                <form action="Manual_Administrador.pdf" method="post">
                                  <button type="submit" name="reporte" class="btn btn-info">Reporte</button>
                                </form>
                            </div>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                         <div  class="formulario" id="formulario" >
                            <div class="col-md-4">
                            <?php
                                  require_once '../utili/Conexion.php';
                                  $email=$_SESSION['correo'];
                                  $query=$mysqli->query("SELECT documento FROM persona where email='$email'");
                                  if ($query->num_rows>=1){
                                  foreach ($query as $key) {
                                  $key['documento'];}}?>
                    <form action="ActualizarPersona.php?documento=<?php echo $key['documento']?>" method="POST">
                        <div class="form-group">
                           <label for="nombre"> Nombre: </label>
                           <input name="nombre" type="text" class="form-control" ></div>
               <div class="form-group">
                   <label for="apellido"> Apellido: </label>
                  <input name="apellido" type="text" class="form-control" >
                </div>
                 <div class="form-group">
                     <label for="clave"> Clave: </label>
                   <input name="clave" type="password" class="form-control" >
                   </div>
                <div class="form-group">
               <button class="btn btn-info" name="actualizar" type="submit">Actualizar</button>
      
                  </div>
                  </form>
                            
                          </div>
                        </div>
                            
                            <!-- end user projects -->

                          </div>
                         
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                          

                         
                        </div>
                      </div>
                   </div>
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
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>