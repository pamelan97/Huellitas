<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

<div class="container mt-5">
  <h1>Formulario datos de Mascota</h1>
  <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/agregar02Mascota') ?>">
    <input type="hidden" name="usuario_id" value="<?= $_SESSION['USR']->id ?>">
    <div class="form-group">
      <label>Ingrese Primer contacto telefonico</label>
      <input type="phone" name="telefono1" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese segundo contacto telefonico</label>
      <input type="phone" name="telefono2" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese el nombre de su mascota</label>
      <input type="text" name="nombreMascota" class="form-control" required />
    </div>
    <div class="form-group">
      <label>Ingrese la fecha de nacimiento de su mascota</label>
      <input type="date" name="fechaMascota" class="form-control" required />
    </div>



    <p>
      <label for="Raza"> Seleccione la raza de su mascota:</label>

      <select name="razaMascota">

        <?php

        foreach ($razas as $raza) {

          echo '<option value="' + $raza->id_raza + '">' + $raza->descripcion + '</option>';
        }

        ?>
    </p>




<p>
  </select>

  <label for="Tamano"> Seleccione el tamaño de tu mascota:</label>

  <select name="tamanoMascota">
    <option value="1">Raza pequeña</option>
    <option value="2">Raza Mediana</option>
    <option value="3">Raza Grande</option>
  </select>
</p>



<p>
  <label for="Genero"> Seleccione el genero de tu mascota:</label>
</p>
<p>
  <input type="radio" name="generoMascota" value="1">
  "Macho"
  <br>
</p>
<p>
  <input type="radio" name="generoMascota" value="2">
  "Hembra"
  <br>
</p>



<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">REGISTRAR DATOS DE MASCOTA</button>
  <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
</div>
</form>
</div>


<?= $this->endSection() ?>