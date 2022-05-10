
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Editar datos segundo dueño:</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/editarmascota-editar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
    <div class="form-group">
      <label>Ingrese su correo eléctronico:</label>
      <input type="email" name="correoDueno" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese su primer contacto telefonico</label>
      <input type="phone" name="duenoTelefono1" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese su segundo contacto telefonico</label>
      <input type="phone" name="duenoTelefono2" class="form-control" required />
    </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">ACTUALIZAR DATOS DE MASCOTA</button>
  <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
</div>
    </form>
  </div>
  
<?= $this->endSection() ?>
