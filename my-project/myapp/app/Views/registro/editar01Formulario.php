<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container mt-5">
  <h1 class="text-center">Actualizar datos de Usuario</h1>
  <h4>Actualizar datos de dueño:</h4>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroCrud/agregar02Continuar') ?>">
      <div class="form-group">
        <label>Ingrese nuevo correo electrónico</label>
        <input type="email" name="correo" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Cree una nueva contraseña:</label>
        <input type="password" name="clave" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nuevo teléfono 1:</label>
        <input type="phone" name="telefono1" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nuevo teléfono 2:</label>
        <input type="phone" name="telefono2" class="form-control" required/>
      </div>

      <h4>Actualizar datos de mascota:</h4>
      <div class="form-group">
        <label>Ingrese nuevo nombre mascota</label>
        <input type="text" name="nombreMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nueva fecha de nacimiento de mascota</label>
        <input type="date" name="fechaMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese nueva raza de mascota</label>
        <input type="text" name="razaMascota" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
      <a href="<?php echo site_url('######');?>" class="btn btn-secondary btn-sm">Cancelar</a>
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