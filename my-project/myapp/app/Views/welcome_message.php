<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
		<h1 class="text-center"> Bienvenido a Huellitas</h1>
		
			<ul>
			<div class="text-center"><br>
				<a href="<?php echo site_url('/registro') ?>" class="btn btn-success mb-2">Registrate en Huellitas</a><br>
				<a href="<?php echo site_url('/login') ?>" class="btn btn-success mb-2">Iniciar Sesión en Huellitas</a><br>
			</div>
			</ul>
</div>
<?= $this->endSection() ?>
