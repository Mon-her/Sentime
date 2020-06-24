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
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                                <h3>Perfil</h3>
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
                                        <div class="col-md-6 col-sm-6  profile_left">

                                            <div class="profile_img">

                                            </div>
                                            <br><br>

                                            <h3><?php echo $_SESSION['user'] . " " . $_SESSION['apellido'] ?></h3>

                                            <ul class="list-unstyled user_data">


                                                <li>
                                                    <?php
                                                    require("../utili/Conexion.php");
                                                    $email = $_SESSION['correo'];
                                                    $sql = ("SELECT certificacion FROM 
                                                    titulo t
                                                    inner join 
                                                    persona_titulo pt on t.id_titulo=pt.id_titulo
                                                    inner join
                                                    persona on persona_documento=documento
                                                    WHERE email='$email'");
                                                    $query = $mysqli->query($sql);
                                                    $mysqli->close();
                                                    ?>
                                                    <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $_SESSION['rol'] ?> 

                                                </li>

                                                <li>
                                                    <i class="fa fa-mortar-board user-profile-icon"></i> 
                                                    <?php
                                                    foreach ($query as $key) {
                                                        echo $key['certificacion'] . " - ";
                                                    }
                                                    ?>
                                                </li>

                                                <li class="m-top-xs">
                                                    <i class="fa fa-envelope user-profile-icon"></i>
                                                    <?php echo $_SESSION['correo'] ?></a>
                                                </li>
                                            </ul>

                                            <a class="btn btn-success" href="formValidationInstructor.php"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
                                            <br />

                                            <!-- start skills -->

                                            <!-- end of skills -->

                                        </div>
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