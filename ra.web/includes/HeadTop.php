<?php //echo $_SESSION['usuario_nombre']; 
  switch ($_SESSION['usuario_tipo']) {
      case 'A':
      ?>
        <!--Nav-->
        <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container-fluid px-md-5">
            <a class="navbar-brand" href="index_principal.php">Atenco <span>Independiente</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index_principal.php" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="secciones.php" class="nav-link">Secciones</a></li>
                <li class="nav-item"><a href="afiliados.php" class="nav-link">Afiliados</a></li>
                <li class="nav-item" style="padding-top: 10px;">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="color:#ffffff;">
                    Registro
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <a class="dropdown-item" href="#" onclick="mostrarModalAgregarDirectivo();">Directivo</a>
                      <a class="dropdown-item" href="#" onclick="mostrarModalAgregarLider();">Lider</a>
                      <a class="dropdown-item" href="#" onclick="mostrarModalAgregarCoordinador();">Coordinador</a>
                      <a class="dropdown-item" href="#" onclick="mostrarModalAgregarSimpatizante();">Simpatizante</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                      <img src="./ra.web/img/user_1.png" alt="Profile image" class="avatar-rounded" style="height: 30px; width: 30px; margin-bottom: 2px;">
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <h5 class="dropdown-header"  align="center">Administrador</h5>
                      <button class="dropdown-item" type="button">
                        <h5 class="text-overflow">
                          <i class="fa fa-unlock" aria-hidden="true"></i>
                          <small><?php echo $_SESSION['usuario_nombre'];?></small>
                        </h5>
                      </button>
                      <a class="dropdown-item" href="Logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;Salir</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--End Nav-->
      <?php
      break;
    default:
?>
        <!--Nav-->
        <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container-fluid px-md-5">
            <a class="navbar-brand" href="index_principal.php">Atenco <span>Independiente</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index_principal.php" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
                <li class="nav-item"><a href="secciones.php" class="nav-link">Secciones</a></li>
                <li class="nav-item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                      <img src="./ra.web/img/user_1.png" alt="Profile image" class="avatar-rounded" style="height: 30px; width: 30px; margin-bottom: 2px;">
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <h5 class="dropdown-header"  align="center">Administrador</h5>
                      <button class="dropdown-item" type="button">
                        <h5 class="text-overflow">
                          <i class="fa fa-unlock" aria-hidden="true"></i>
                          <small><?php echo $_SESSION['usuario_nombre'];?></small>
                        </h5>
                      </button>
                      <a class="dropdown-item" href="Logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;Salir</a>
                    </div>
                  </div>
                </li>
                <!--<li class="nav-item"><a href="afiliados.php" class="nav-link">Afiliados</a></li>
                <li class="nav-item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                      <img src="./img/avatars/admin.svg" alt="Profile image" class="avatar-rounded" style="height: 30px; width: 30px; margin-bottom: 2px;">
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <button class="dropdown-item" type="button" >
                        <i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;<a href="./includes/logout.php">Salir</a>
                      </button>
                    </div>
                  </div>
                </li>-->
              </ul>
            </div>
          </div>
        </nav>
        <!--End Nav-->
<?php
      break;
  }
?>


<!--Nav
  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-5">
      <a class="navbar-brand" href="index.php">Atenco <span>Independiente</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i> Menu
      </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#ModalCenterInicioSesion">Inicio de Sesión</a></li>
          </ul>
      </div>
    </div>
  </nav>
END nav -->