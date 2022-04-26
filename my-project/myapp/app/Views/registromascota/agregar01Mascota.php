
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Formulario datos de Mascota</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/agregar02Mascota') ?>">
      <div class="form-group">
        <label>Ingrese su número de telefono 1</label>
        <input type="phone" name="telefono1" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Ingrese su número de telefono 1</label>
        <input type="phone" name="telefono2" class="form-control" required/>
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

  
<?= $this->endSection() ?>