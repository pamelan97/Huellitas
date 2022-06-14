<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

<div class="container mt-5">
  <h1 class="text-center">Registro de Usuario</h1>
  <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroCrud/agregar02Continuar') ?>">

    <div class="form-group">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
      </svg>
      <label>Ingrese su correo electrónico</label>
      <input type="email" name="correo" class="form-control" required />
      <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
    </div>


    <div class="form-group">
      <label>Cree una contraseña:</label>
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

<script>
  if ($("#add_create").length > 0) {
    $("#add_create").validate({
      rules: {
        correo: {
          required: true,
          maxlength: 100
        },
        clave: {
          required: true,
          maxlength: 150
        },
      },
      messages: {
        correo: {
          required: "El correo es obligatorio",
          maxlength: "El correo a lo maximo de 100 caracteres.",
        },
        clave: {
          required: "La contraseña es obligatoria",
          maxlength: "La contraseña a lo más es de 150 caracteres.",
        },
      },
    })
  }
</script>

<?= $this->endSection() ?>