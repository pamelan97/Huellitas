
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Registro de Mascota</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/agregar02Mascota') ?>">
      <div class="form-group">
        <label>Ingrese nombre mascota</label>
        <input type="text" name="nombre_mascota" class="form-control" required/>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>
      <a href="<?php echo site_url('######');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>

  
<?= $this->endSection() ?>