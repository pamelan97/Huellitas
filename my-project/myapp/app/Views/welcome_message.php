<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>
<div>
		<h1> Bienvenido a huellitas</h1>
			<ul>
				<li><a href="<?php echo site_url('/registro-lista/') ?>">Registrarse en huellitas</a> </li>
				<li><a href="<?php echo site_url('#') ?>">Ingresar a huellitas</a> </li>
			</ul>
</div>
<?= $this->endSection() ?>