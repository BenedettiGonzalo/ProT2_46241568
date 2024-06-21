
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/Estilos/styles.css">
<script src="assets/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    
  <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
      <img src="<?php echo base_url('assets/img/Rosamonte.png')?>"width="120" height="75">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca De</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cuentas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registro">Registrarse</a></li>
            <li><a class="dropdown-item" href="ingreso">Ingresar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="recuperar">Recuperar contraseña</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>    
