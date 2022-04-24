<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 
  <div class="container mt-5">
  	<?php if($registro): ?>
      <div class="form-group">
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
		<a href="<?php echo site_url('/registromascota-editar/'.$registro->id);?>" class="btn btn-primary btn-sm">Editar</a>
		<a href="<?php echo site_url('/registromascota-eliminar/'.$registro->id);?>" class="btn btn-danger btn-sm">Borrar</a>
		<a href="<?php echo site_url('/registromascota-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/registromascota-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>