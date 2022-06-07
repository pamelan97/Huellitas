<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>


<div class="lead"> 

<?php if($registro[0]->estadoMascotas==1){

    ?> <?= ('Hola, mi nombre es ' . $registro[0]->nombreMascota . ' y estoy perdida, dejale tus datos a mi dueña/o para que me venga por mi, gracias :(')?>
    
    <div class="container mt-5">
  <h3 class="text-center">Mensaje al Dueña/o:</h3>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/enviarmensaje') ?>">
    <input type="hidden" name="mascota_id" value="<?= $registro[0]->id ?>"/>
      <div class="form-group">
        <label>Deja tu nombre:</label>
        <input type="text" name="nombre" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Deja tu número de teléfono:</label>
        <input type="phone" name="telefono" class="form-control" required/>
      </div>
      <div class="form-group">
        <label>Deja un mensaje de como me encuentro:</label>
        <input type="text" name="mensaje" class="form-control" required/>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">ENVIAR</button>
        <a href="<?php echo site_url('###');?>" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
    </form>
  </div>
    
    <?php 
}else{
    ?> Hola humano, no estoy perdida, no me robes mi dueña/o esta cerca >:( <?php
}
?>
</div>


<?= $this->endSection() ?>
