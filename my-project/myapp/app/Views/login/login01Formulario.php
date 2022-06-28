<?= $this->extend('/login/formausuario') ?>
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
    <h1 class="text-center">Accede a tu cuenta</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('login-login01Validar/') ?>">

      <div class="form-group">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
        <label class="formulario">Ingrese su correo electrónico:</label>
        <input type="email" name="el_correo" class="form-control" required />
      </div>

      <div class="form-group">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
        </svg>
        <label class="formulario">Ingresa tu contraseña:</label>
        <input type="password" name="la_clave" class="form-control" required />
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ACCEDER</button>
        <a href="<?php echo site_url('###'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
</div>

<br>

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