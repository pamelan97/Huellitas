<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>

<div class="container mt-5">
  <h1>Formulario datos de Mascota</h1>
  <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/agregar02PlacaMascota') ?>">
    <input type="hidden" name="usuario_id" value="<?= $_SESSION['USR']->id ?>">
    <div class="form-group">
      <label>Su N° de placa es:</label>
      <input type="text" name="placaId" class="form-control" value="<?= $_SESSION['PLACA']->id ?>" readonly />
    </div>
    <div class="form-group">
      <label>Ingrese Primer contacto telefonico</label>
      <input type="phone" name="telefono1" class="form-control" value="<?= ($registro?$registro[0]->telefono1:'') ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese segundo contacto telefonico</label>
      <input type="phone" name="telefono2" class="form-control" value="<?= ($registro?$registro[0]->telefono2:'') ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese el nombre de su mascota</label>
      <input type="text" name="nombreMascota" class="form-control" value="<?= ($registro?$registro[0]->nombreMascota:'') ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese la fecha de nacimiento de su mascota</label>
      <input type="date" name="fechaMascota" class="form-control" value="<?= ($registro?$registro[0]->fechaMascota:'') ?>" required />
    </div>
    <p>
      <label for="Raza"> Seleccione la raza de su mascota:</label>

      <select name="razaMascota">

        <?php

        foreach ($razas as $raza) {

        ?><option value="<?= $raza->raza_id ?>" <?= ($registro && $registro[0]->razaMascota==$raza->raza_id?"selected":""); ?>><?= $raza->descripcion ?></option><?php
                                                                                }

      ?>
      </select>
    </p><br>




    <p>
      <label for="Tamano"> Seleccione el tamaño de su mascota:</label>

      <select name="tamanoMascota">

        <?php

        foreach ($tamanos as $tamano) {

        ?><option value="<?= $tamano->tamano_id ?>" <?= ($registro && $registro[0]->tamanoMascota==$tamano->tamano_id?"selected":""); ?>><?= $tamano->descripcion ?></option><?php
                                                                                      }

      ?>
      </select>
    </p><br>


    <p>
      <label for="Genero"> Seleccione el genero de tu mascota:</label>
    </p>
    <?php

    foreach ($generos as $genero) {

    ?>
      <p>
        <input type="radio" name="generoMascota" value="<?= $genero->genero_id ?>" <?= ($registro && $registro[0]->generoMascota==$genero->genero_id?"checked":""); ?>>
        <?= $genero->descripcion ?>
        <br>
      </p>
    <?php

    }

    ?>
<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">REGISTRAR DATOS DE MASCOTA</button>
  <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
</div>
</form>
</div>


<?= $this->endSection() ?>