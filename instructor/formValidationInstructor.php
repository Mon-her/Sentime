<?php
require_once '../utili/sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SENTIME</title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="icon/Horarios.ico" />
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">


                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="icon/Horarios.ico" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido</span>
                                <h2><?php echo $_SESSION['user'] ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3><?php echo $_SESSION['rol'] ?></h3>
                                <ul class="nav side-menu">
                                    <li><a href="horarioInstructor.php"><i class="fa fa-laptop"></i> Mi Horario</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->

                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <?php
                require_once './menu.php';
                ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Editar perfil</h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_title">

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <?php
                                        require("../utili/Conexion.php");
                                        $email = $_SESSION['correo'];
                                        $query = $mysqli->query("SELECT documento FROM persona where email='$email'");
                                        if ($query->num_rows >= 1) {
                                            foreach ($query as $key) {
                                                $key['documento'];
                                            }
                                        }
                                        $mysqli->close();
                                        ?>
                                        <form action="ActualizarPersona.php?documento=<?php echo $key['documento'] ?>" method="POST">
                                            <div class="form-group">
                                                <label for="nombre"> Nombre: </label>
                                                <input name="nombre" type="text" required="" class="form-control" value="<?php echo $_SESSION["user"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="apellido"> Apellido: </label>
                                                <input name="apellido" type="text" required="" class="form-control" value="<?php echo $_SESSION["apellido"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="email"> Email: </label>
                                                <input name="email" type="email" required="" class="form-control" value="<?php echo $_SESSION["correo"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="clave"> Clave: </label>
                                                <input name="clave" type="text" required="" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success" name="actualizar" type="submit">Actualizar</button>
                                                <a href="profileInstructor.php"><button class="btn btn-danger" name="cancelar" type="button">Cancelar</button></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        SENTIME by ADSI
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>


        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- validator -->
        <script src="../vendors/validator/validator.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>