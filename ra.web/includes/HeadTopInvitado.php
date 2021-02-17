<!--Nav-->
<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container-fluid px-md-5">
    <a class="navbar-brand" href="index.php">Atenco <span>Independiente</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
        <li class="nav-item"><a href="secciones.php" class="nav-link">Secciones</a></li>
        <li class="nav-item"><a href="afiliados.php" class="nav-link">Afiliados</a></li>
        <!--<li class="nav-item"><a href="#" class="nav-link"  onclick="mostrarModalAgregarAfiliado();">Afiliate</a></li>-->
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
        <!--<li class="nav-item"><a href="./login.php" class="nav-link">Inicio de Sesión</a></li>-->
        </ul>
    </div>
  </div>
</nav>
<!--End Nav-->