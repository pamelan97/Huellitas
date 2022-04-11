
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registro-agregar-continuar') ?>">
      <div class="form-group">
        <label>correo</label>
        <input type="text" name="correo" class="form-control"/>
      </div>
      <div class="form-group">
        <label>clave</label>
        <input type="text" name="clave" class="form-control"/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Registrarse</button>
      <a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
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
            maxlength: "El correo a lo más es de 100 caracteres.",
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