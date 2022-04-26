<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registro-editar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
    <div class="form-group">
        <label>Ingrese su número de telefono 1</label>
        <input type="phone" name="nombreMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese su número de telefono 1</label>
        <input type="phone" name="nombreMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese el nombre de su mascota</label>
        <input type="text" name="nombreMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese la fecha de nacimiento de su mascota</label>
        <input type="date" name="fechaMascota" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese la raza de su mascota</label>
        <input type="text" name="razaMascota" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRAR DATOS DE MASCOTA</button>
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