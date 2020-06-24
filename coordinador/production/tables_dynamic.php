<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once '../../utili/sesion.php';
        ?>g
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/SENA Horarios.jpg" type="image/ico" />
        <title>SENA | Horarios </title>

        <!-- Bootstrap -->
        <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-calendar"></i> <span>SENA Horarios</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/SENA Horarios.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2><?php echo $_SESSION['user'] ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />
                        <center><a href="index.php"><button class="btn" style="width: 150px; background-color: #57D3AF;">Home</button></a></center>
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Coordinador</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-search"></i>Consultar datos<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="index2.php">Ficha</a></li>
                                            <li><a href="index3.php">Programa</a></li>
                                            <li><a href="index4.php">Ambientes</a></li>
                                            <li><a href="index5.php">Sede</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-calendar"></i>Horarios<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="horarios.php">Generar</a></li>
                                            <li><a href="tables_dynamic.php">Tablas de creación</a></li>
                                            <li><a href="horarios2.php">Ver horarios</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.php"><i class="fa fa-users"></i>Instructores</a>
                                    <li><a href="calendar.php"><i class="fa fa-calendar-o"></i>Calendario</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../utili/logout.php">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/SENA Horarios.jpg" alt=""><h2><?php echo $_SESSION['user'] ?></h2>
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="profile.php"> Perfil</a>
                                        <a class="dropdown-item"  href="form_validation.php">
                                            <span>Configuración</span>
                                        </a>
                                        <a class="dropdown-item"  href="../../utili/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                                    </div>
                                </li>

                                <li role="presentation" class="nav-item dropdown open">
                                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">2</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="profile.php">
                                                <span class="image"><img src="images/img3.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>Johanna Cifuentes</span>
                                                    <span class="time">Hace 3 minutos</span>
                                                </span>
                                                <span class="message">
                                                    Buen día señor coordinador la presente es para informar...
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="profile.php">
                                                <span class="image"><img src="images/img1.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>Jhon Moreno</span>
                                                    <span class="time">Hace 10 minutos</span>
                                                </span>
                                                <span class="message">
                                                    Señor coordinador quisiera verificar mi horario pues...
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <div class="text-center">
                                                <a class="dropdown-item">
                                                    <strong>Ver todas...</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Información para la creación de horarios</h3>
                            </div>


                        </div>

                        <div class="clearfix"></div>

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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Aula</th>
                                                                <th>Descripción</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>503</td>
                                                                <td>Salón de audiovisuales</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>102</td>
                                                                <td>Salón empresarial</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>301</td>
                                                                <td>ADSI desarrollo del software</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>103</td>
                                                                <td>Impresión digital</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>107</td>
                                                                <td>Biblioteca</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Sedes</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                                        <thead>
                                                            <tr> 
                                                                <th>Id</th>
                                                                <th>Sede</th>
                                                                <th>Dirección</th>
                                                                <th>Centro</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Cenigraf</td>
                                                                <td>Cll. 15 #31-42, Bogotá</td>
                                                                <td>Complejo paloquemao</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Centro</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Nombre del centro</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Complejo paloquemao</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Programas de formación</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Numero de programa</th>
                                                                <th>Denominacion</th>
                                                                <th>Tipo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Análisis y desarrollo de sistemas de información</td>
                                                                <td>Tecnólogo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Sistemas</td>
                                                                <td>Técnico</td></tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Encuadernación</td>
                                                                <td>Tecnólogo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Impresión multimedia</td>
                                                                <td>Técnico</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Número de ficha</th>
                                                                <th>Ingreso</th>
                                                                <th>Salida</th>
                                                                <th>Programa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1828917</td>
                                                                <td>15/02/2019 </td>
                                                                <td>21/01/2021</td>
                                                                <td>ADSI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1852649</td>
                                                                <td>15/02/2019</td>
                                                                <td>15/06/2019</td>
                                                                <td>Sistemas</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1248654</td>
                                                                <td>15/02/2019</td>
                                                                <td>21/01/2021</td>
                                                                <td>Encuadernación</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1235987</td>
                                                                <td>15/06/2019</td>
                                                                <td>21/01/2020</td>
                                                                <td>Impresión multimedia</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id bloque</th>
                                                                <th>Instructor</th>
                                                                <th>Día</th>
                                                                <th>Año</th>
                                                                <th>Trimestre</th>
                                                                <th>Rango de hora</th>
                                                                <th>Ficha</th>
                                                                <th>Aula</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Johanna Cifuentes</td>
                                                                <td>Viernes</td>
                                                                <td>2019</td>
                                                                <td>3</td>
                                                                <td>6:00-7:40</td>
                                                                <td>1828917</td>
                                                                <td>301</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Jhon Moreno</td>
                                                                <td>Jueves</td>
                                                                <td>2019</td>
                                                                <td>4</td>
                                                                <td>6:00-7:40</td>
                                                                <td>1564426</td>
                                                                <td>105</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Carlos Salcedo</td>
                                                                <td>Miércoles</td>
                                                                <td>18:00-19:40</td>
                                                                <td>2019</td>
                                                                <td>5</td>
                                                                <td>12484234</td>
                                                                <td>503</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


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
                    <footer>
                        <div class="pull-right">
                            SENA Horarios. <a href="https://colorlib.com">Política de privacidad</a>
                        </div>

                        <div class="clearfix"></div>        </footer>
                    <!-- /footer content -->
                </div>
            </div>

            <!-- jQuery -->
            <script src="../../vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!-- FastClick -->
            <script src="../../vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="../../vendors/nprogress/nprogress.js"></script>
            <!-- Chart.js -->
            <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
            <!-- jQuery Sparklines -->
            <script src="../../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
            <!-- Flot -->
            <script src="../../vendors/Flot/jquery.flot.js"></script>
            <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
            <script src="../../vendors/Flot/jquery.flot.time.js"></script>
            <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
            <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
            <!-- Flot plugins -->
            <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
            <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
            <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
            <!-- DateJS -->
            <script src="../../vendors/DateJS/build/date.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="../../vendors/moment/min/moment.min.js"></script>
            <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="../../build/js/custom.min.js"></script>
    </body>
</html>