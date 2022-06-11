<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>


<div class="lead"> 

<?php if($registro[0]->estadoMascotas==1){

    ?> <strong class="text-center"><h3>  <?= ('Hola, mi nombre es ' . $registro[0]->nombreMascota . ' y estoy perdida, dejale tus datos a mi dueña/o para que venga por mi, gracias :(')?> </h3></strong>
    
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
        <label class="form-label">Deja un mensaje de como me encuentro:</label>
        <textarea type="text" name="mensaje" class="form-control" rows="3" required ></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">ENVIAR MENSAJE</button>
      </div>
    </form>
  </div>
    
    <?php 
}else{
    ?> <br><br><strong><h3>  Hola humano, no estoy perdida/o, no me robes mi dueña/o esta muy cerca y vigilandome >:(  </h3></strong> <?php
}
?>
</div>


<?= $this->endSection() ?>