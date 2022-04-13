
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Registro de usuario</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroCrud/agregar02Continuar') ?>">
      <div class="form-group">
        <label>Ingrese su correo electrónico</label>
        <input type="mail" name="correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cree una contraseña:</label>
        <input type="password" name="clave" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRARSE</button>
      <a href="<?php echo site_url('######');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          concierto: {
            required: true,
            maxlength: 100
          },
          ubicacion: {
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