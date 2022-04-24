<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>
<div class="container center text-center">
<form method="post" id="add_create" name="add_create" action="<?= site_url('/login') ?>">
<h1>¡Registro exitoso!, ya puedes ingresar a tu cuenta</h1>
<button type="submit" class="btn btn-primary btn-sm">Ingresar a mi cuenta</button>
</form>
</div>

<?= $this->endSection() ?>
