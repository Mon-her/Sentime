<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="icon/circle-sentime.ico" alt="..." class="img-circle profile_img">
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
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                    <li><a href="inicio.php"><i class="fa fa-laptop"></i> Inicio</a></li>
                     <li><a><i class="fa fa-info-circle"></i> Información</a><ul class="nav child_menu">
                      <li><a href="aulas.php">Aulas</a></li>
                      <li><a href="bloques.php">Bloques</a></li>
                      <li><a href="centros.php">Centros</a></li>
                      <li><a href="competencias.php">Competencias</a></li>
                      <li><a href="descripciones.php">Descripción de aula</a></li>
                      <li><a href="duraciones.php">Duraciones de los niveles de formación</a></li>
                      <li><a href="fichas.php">Fichas</a></li>
                      <li><a href="formaciones.php">Niveles de formación</a></li>
                      <li><a href="programas.php">Programas</a></li>
                      <li><a href="resultados.php">Resultados de las competencias</a></li>
                      <li><a href="sedes.php">Sedes</a></li>
                      <li><a href="tipos.php">Tipos de formación</a></li>  
                    </ul></li>
                      <li><a href="instructores.php"><i class="fa fa-users"></i> Instructores</a></li>
                 </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
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
                      <?php echo $_SESSION['user'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        
                      <a class="dropdown-item"  href="../utili/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                    </div>
                  </li>
  
                  
                </ul>
              </nav>
            </div>
          </div>
