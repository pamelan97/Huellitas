<a href="<?php echo site_url('/registromascota-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registromascota-elimnar-continuar/') ?>">
	  <input type="hidden" name="usuario_id" value="<?php echo($registro->id);?>"/>
      <div class="form-group">
        <label>Primer contacto telefonico: </label> <?php echo($registro->telefono1); ?>
      </div>
      <div class="form-group">
        <label>Primer contacto telefonico: </label> <?php echo($registro->telefono2); ?>
      </div>
      <div class="form-group">
        <label>Nombre de la mascota: </label> <?php echo($registro->nombreMascota); ?>
      </div>
      <div class="form-group">
        <label>Fecha de nacimiento de la mascota: </label> <?php echo($registro->fechaMascota); ?>
      </div>
      <div class="form-group">
        <label>Raza de la mascota: </label> <?php echo($registro->razaMascota); ?>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/registromascota-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>