<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 
  <div class="container mt-5">
  	<?php if($registro): ?>
      <div class="form-group">
     	<label>correo</label>
		<?php echo($registro->correo); ?>	 
      </div>
      <div class="form-group">
        <label>clave</label>
		<?php echo($registro->clave); ?>	 
	  </div>
      <div class="form-group">
		<a href="<?php echo site_url('/registro-editar/'.$registro->id);?>" class="btn btn-primary btn-sm">Editar</a>
		<a href="<?php echo site_url('/registro-eliminar/'.$registro->id);?>" class="btn btn-danger btn-sm">Borrar</a>
		<a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>
	  <?php else :?>
	  <div class="form-group">
	  <a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Volver</a>
	  </div>	  
	  <?php endif; ?>

<?= $this->endSection() ?>