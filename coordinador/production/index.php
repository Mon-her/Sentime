<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once '../../utili/sesion.php';
        ?>
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
        <!-- iCheck -->
        <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
                                            <li><a href="index4.php">Ambiente</a></li>
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
                                        <a class="dropdown-item"  href="profile.html"> Perfil</a>
                                        <a class="dropdown-item"  href="form_validation.php">
                                            <span>Configuración</span>
                                        </a>
                                        <a class="dropdown-item"  href="../../utili/logout.php"><i class="fa fa-sign-out pull-right"></i>Salir</a>
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
                    <!-- top tiles -->
                    <div class="col-md-12" style="height: 100px;">
                        <br />
                        <h1>Principal</h1>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <!-- start of user-activity-graph -->
                        <!-- end of user-activity-graph -->

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Respuestas</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Eventos</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                                    <!-- start recent activity -->
                                    <ul class="messages">
                                        <li>
                                            <img src="images/img3.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Johanna Cifuentes</h4>
                                                <blockquote class="message">Buen día señor coordinador la presente es para informar que el día de mañana no puedo presentarme en formación porque tengo cita médica, gracias</blockquote>
                                                <br />
                                                <div id="cnt_form">
                                                    <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <textarea name="mensaje" id="message"
                                                                          required="required" class="form-control" rows="8" placeholder="Mensaje...">

                                                                </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-dark">Responder</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/img1.jpg" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-error">21</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Jhon moreno</h4>
                                                <blockquote class="message">Señor coordinador quisiera verificar mi horario pues tiene el nombre de otra persona</blockquote>
                                                <br />
                                                <div id="cnt_form">
                                                    <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <textarea name="mensaje" id="message"
                                                                          required="required" class="form-control" rows="8" placeholder="Mensaje...">

                                                                </textarea>
                                                            </div>
                                                            <button class="btn btn-dark">Responder</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <!-- end recent activity -->

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                    <!-- start user projects -->
                                    <div class="col-md-6">
                                        <div id="cnt_form">
                                            <form id="contact-form" class="contact" name="cantact-form" method="post" action="mailto:ingbra12@hotmail.com">
                                                <div class="form-group">
                                                    <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Nombre del evento"></div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <textarea name="mensaje" id="message"
                                                                  required="required" class="form-control" rows="8" placeholder="Asunto"></textarea></div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Enviar</button></div>
                                                    <!-- end user projects -->

                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                                        photo booth letterpress, commodo enim craft beer mlkshk </p>
                                                </div>
                                            </form>
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
                    <div class="clearfix"></div>
                </footer>
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
        <!-- gauge.js -->
        <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../../vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../../vendors/skycons/skycons.js"></script>
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
        <!-- JQVMap -->
        <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../../vendors/moment/min/moment.min.js"></script>
        <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../../build/js/custom.min.js"></script>

    </body>
</html>
