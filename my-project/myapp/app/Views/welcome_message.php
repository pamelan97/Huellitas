<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
		<h1 class="text-center"> Bienvenido a huellitas</h1>
			<ul>
			<div class="text-center"><br>
				<a href="<?php echo site_url('/registroCrud/index') ?>" class="btn btn-success mb-2">Registrarse</a><br>
				<a href="<?php echo site_url('/LoginLogOutController/login01Formulario') ?>" class="btn btn-success mb-2">Iniciar Sesion</a>
			</div>
			</ul>
</div>
<?= $this->endSection() ?>