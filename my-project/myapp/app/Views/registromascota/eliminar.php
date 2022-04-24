<a href="<?php echo site_url('/login-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registromascota-elimnar-continuar/') ?>">
	  <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
    <label>Nombre Mascota</label>
		<?php echo($registro->nombre); ?>	 
      </div>
      <div class="form-group">
     	<label>Fecha de Nacimiento</label>
		<?php echo($registro->fecha); ?>	 
      </div>
	  <div class="form-group">
     	<label>Raza de Mascota</label>
		<?php echo($registro->raza); ?>	 
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/registromascota-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>