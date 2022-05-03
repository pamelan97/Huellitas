<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/editar01Formulario') ?>">
    <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
    <input type="hidden" name="usuario_id" value="<?= $_SESSION['USR']->id ?>">
    <div class="form-group">
      <label>Ingrese nuevo primer contacto telefonico</label>
      <input type="phone" name="telefono1" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese nuevo segundo contacto telefonico</label>
      <input type="phone" name="telefono2" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese el nuevo nombre de su mascota</label>
      <input type="text" name="nombreMascota" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese la nueva fecha de nacimiento de su mascota</label>
      <input type="date" name="fechaMascota" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese la nueva raza de su mascota</label>
      <input type="text" name="razitaMascota" class="form-control" required />
    </div>
<p>
  <label for="Tamano"> Ingresa el nuevo tamaño de tu mascota:</label>

  <select name="tamanitoMascota">
    <option value="Pequena">Raza pequeña</option>
    <option value="Mediana">Raza Mediana</option>
    <option value="Grande">Raza Grande</option>
  </select>
</p>

<p>
  <label for="Genero"> Ingresa el nuevo genero de tu mascota:</label>
</p>
<p>
  <input type="radio" name="generoMascota" value="Macho">
  "Macho"
  <br>
</p>
<p>
  <input type="radio" name="generoMascota" value="Hembra">
  "Hembra"
  <br>
</p>
<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">ACTUALIZAR DATOS DE MASCOTA</button>
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
            required: "El nombre del conciorto es obligatorio",
            maxlength: "El nombe del concierto a lo más es de 100 caracteres.",
          },
          clave: {
            required: "El nombre de la ubicación es obligatorio",
            maxlength: "La ubcicación a lo más es de 150 caracteres.",
          },
        },
      })
    }
  </script>
  
<?= $this->endSection() ?>