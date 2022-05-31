<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>

<div class="lead"> <?= ($registro[0]->estadoMascotas==1?'Hola, soy ' . $registro[0]->nombreMascota . ' y estoy perdida :(':'Hola soy ' . $registro[0]->nombreMascota . ' y no estoy perdida :)') ?></div>

<?= $this->endSection() ?>