<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Actualizar datos de Mascota</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registromascota-editar-continuar') ?>">
    <input type="hidden" name="usuario_id" value="<?php echo($registro->usuario_id);?>"/>
    <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
    <input type="hidden" name="estadoMascotas" value="<?php echo($registro->estadoMascotas);?>"/>
    <div class="form-group">
      <label>Ingrese nuevo primer contacto telefonico</label>
      <input type="phone" name="telefono1" class="form-control" value="<?php echo($registro->telefono1); ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese nuevo segundo contacto telefonico</label>
      <input type="phone" name="telefono2" class="form-control" value="<?php echo($registro->telefono2); ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese el nuevo nombre de su mascota</label>
      <input type="text" name="nombreMascota" class="form-control" value="<?php echo($registro->nombreMascota); ?>" required />
    </div>
    <div class="form-group">
      <label>Ingrese la nueva fecha de nacimiento de su mascota</label>
      <input type="date" name="fechaMascota" class="form-control" value="<?php echo($registro->fechaMascota); ?>" required />
    </div>
    <p>
      <label for="Raza"> Seleccione la raza de su mascota:</label>

      <select name="razaMascota">

        <?php

        foreach ($razas as $raza) {

        ?><option value="<?= $raza->raza_id ?>" <?= ($registro->razaMascota==$raza->raza_id?"selected":""); ?>><?= $raza->descripcion ?></option><?php
                                                                                }

      ?>
      </select>
    </p>




    <p>
      <label for="Tamano"> Seleccione el tamaño de su mascota:</label>

      <select name="tamanoMascota">

        <?php

        foreach ($tamanos as $tamano) {

        ?><option value="<?= $tamano->tamano_id ?>" <?= ($registro->tamanoMascota==$tamano->tamano_id?"selected":""); ?>><?= $tamano->descripcion ?></option><?php
                                                                                      }

      ?>
      </select>
    </p>


    <p>
      <label for="Genero"> Seleccione el genero de tu mascota:</label>
    </p>
    <?php

    foreach ($generos as $genero) {

    ?>
      <p>
        <input type="radio" name="generoMascota" value="<?= $genero->genero_id ?>" <?= ($registro->generoMascota==$genero->genero_id?"checked":""); ?>>
        <?= $genero->descripcion ?>
        <br>
      </p>
    <?php

    }

    ?>
<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">ACTUALIZAR DATOS DE MASCOTA</button>
  <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
</div>
    </form>
  </div>
  
<?= $this->endSection() ?>
