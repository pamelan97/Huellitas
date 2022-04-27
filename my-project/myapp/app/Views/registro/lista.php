<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<form method="post" id="add_create" name="add_create" action="<?= site_url('login') ?>">
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <h2>Bienvenido a Huellitas <?php echo $reg->correo; ?>, ahora puedes ingresar a tu cuenta :) </h2>
         <?php endforeach; ?>
         <?php endif; ?>
         
<button type="submit" class="btn btn-primary btn-sm">volver</button>
</form>
</div>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
<?= $this->endSection() ?>
