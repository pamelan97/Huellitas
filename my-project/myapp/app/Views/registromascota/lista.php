<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<form method="post" id="add_create" name="add_create" action="<?= site_url('##') ?>">
<h1>Registro de mascota exitoso :)</h1>
<button type="submit" class="btn btn-primary btn-sm">volver</button>
</form>
</div>

<?= $this->endSection() ?>
