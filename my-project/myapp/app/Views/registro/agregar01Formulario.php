<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>

<div class="container mt-5">
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
      <a class="navbar-brand" href="#">
        <img class="image3" src="/assets/assets/img/logo2.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>
  
  <div class="row gx-5 align-items-center">
    <h1 class="text-center">Registro de Usuario</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroCrud/agregar02Continuar') ?>">

      <div class="form-group">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
          <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
        </svg>
        <label class="formulario">Ingrese su correo electrónico</label>
        <input type="email" name="correo" class="form-control" required />
        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
      </div>


      <div class="form-group">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg>
        <label class="formulario">Cree una contraseña:</label>
        <input type="password" name="clave" class="form-control" required />
        <div id="passwordHelpBlock" class="form-text">
          Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.
        </div>


      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>
        <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
</div><br>

<footer class="py-5 bg-black, footer text-center">
  <div class="container px-5">
    <div class="row">
      <!-- Footer Location-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Ubicación:</h4>
        <p class="lead mb-0">
          Region Metropolitana
          <br />
          Santiago, de Chile.
        </p>
      </div>
      <!-- Footer Social Icons-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Encuentranos en:</h4>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
      </div>
      <!-- Footer About Text-->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">Contactos:</h4>
        <p class="lead mb-0">
          Teléfono: 22-7774034

          <br />
          Email: Huellitas@contacto.cl

        </p>
      </div>
    </div>
  </div>
</footer>
<div class="copyright py-4 text-center text-white">
  <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
</div>




<?= $this->endSection() ?>