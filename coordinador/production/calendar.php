<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.jpg" type="image/ico" />

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
        <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- FullCalendar -->
        <link href="../../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="../../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

        <!-- Custom styling plus plugins -->
        <link href="../../build/css/custom.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-calendar"></i> <span>SENA Horarios</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2>Eddie Merck Camacho</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />
                        <center><a href="index.html"><button class="btn" style="width: 150px; background-color: #57D3AF;">Home</button></a></center>
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
                                        <img src="images/img.jpg" alt="">Eddie Merck Camacho
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="profile.html"> Perfil</a>
                                        <a class="dropdown-item"  href="form_validation.html">
                                            <span>Configuración</span>
                                        </a>
                                        <a class="dropdown-item"  href="../../index.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                                    </div>
                                </li>

                                <li role="presentation" class="nav-item dropdown open">
                                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">2</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="profile.html">
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
                                            <a class="dropdown-item" href="profile.html">
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
                                <h3>Calendario <small>Click para añadir/editar eventos</small></h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Calendario <small>Eventos</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Editar</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div id='calendar'></div>

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
        <!-- calendar modal -->
        <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Agendar eventos</h4>
                    </div>
                    <div class="modal-body">
                        <div id="testmodal" style="padding: 5px 20px;">
                            <form id="antoform" class="form-horizontal calender" role="form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Evento</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Descripción</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary antosubmit">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel2">Editar calendario</h4>
                    </div>
                    <div class="modal-body">

                        <div id="testmodal2" style="padding: 5px 20px;">
                            <form id="antoform2" class="form-horizontal calender" role="form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Evento</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title2" name="title2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Descripción</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary antosubmit2">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
        <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
        <!-- /calendar modal -->

        <!-- jQuery -->
        <script src="../../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../../vendors/nprogress/nprogress.js"></script>
        <!-- FullCalendar -->
        <script src="../../vendors/moment/min/moment.min.js"></script>

        <script src="../../vendors/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../../build/js/custom.min.js"></script>


    </body>
</html>