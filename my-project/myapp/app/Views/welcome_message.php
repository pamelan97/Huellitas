<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
		<h1 class="text-center"> Bienvenido a Huellitas</h1>
		
			<ul>
			<div class="text-center"><br>
				<a href="<?php echo site_url('/registro') ?>" class="btn btn-success mb-2">Registrarse</a><br>
				<a href="<?php echo site_url('/login') ?>" class="btn btn-success mb-2">Iniciar Sesion Usuario</a><br>
				<a href="<?php echo site_url('/registromascota') ?>" class="btn btn-success mb-2">Registro Mascota</a>
			</div>
			</ul>
</div>
<?= $this->endSection() ?>
