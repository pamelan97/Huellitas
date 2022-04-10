<a href="<?php echo site_url('/concierto-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>


<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
 

<div class="container mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registro-elimnar-continuar/') ?>">
	  <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
      <div class="form-group">
        <label>correo</label> <?php echo($registro->correo); ?>
      </div>
      <div class="form-group">
        <label>clave</label><?php echo($registro->clave);?>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
      <a href="<?php echo site_url('/registro-cancelar/');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>


<?= $this->endSection() ?>