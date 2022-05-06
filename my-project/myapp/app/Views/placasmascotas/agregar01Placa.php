<?php session_start(); ?>
<?= $this->extend('formaStandar') ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>


<div class="container mt-5">
  <h1>Formulario datos de Mascota</h1>
  <form method="post" id="add_create" name="add_create" action="<?= site_url('/registroMascotaCrud/agregar02Mascota') ?>">
    <input type="hidden" name="usuario_id" value="<?= $_SESSION['USR']->id ?>">
    <div class="form-group">
      <label>Su N° de placa es:</label>
      <input type="phone" name="placaId" class="form-control" value="<?= $_SESSION['PLACA']->id ?>" readonly />
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
    <div class="form-group">
      <label>Ingrese la raza de su mascota</label>
      <input type="text" name="razaMascota" class="form-control" value="<?= ($registro?$registro[0]->razaMascota:'') ?>" required />
    </div>
<p>
  <label for="Tamano"> Ingresa el tamaño de tu mascota:</label>

  <select name="tamanitoMascota">
    <option value="Pequena" <?= ($registro?($registro[0]->tamanoMascota=="Pequena"?"selected":""):'') ?>>Raza pequeña</option>
    <option value="Mediana" <?= ($registro?($registro[0]->tamanoMascota=="Mediana"?"selected":""):'') ?>>Raza Mediana</option>
    <option value="Grande" <?= ($registro?($registro[0]->tamanoMascota=="Grande"?"selected":""):'') ?>>Raza Grande</option>
  </select>
</p>

<p>
  <label for="Genero"> Ingresa el genero de tu mascota:</label>
</p>
<p>
  <input type="radio" name="generoMascota" value="Macho" <?= ($registro?($registro[0]->generoMascota=="Macho"?"checked":""):'') ?>>
  "Macho"
  <br>
</p>
<p>
  <input type="radio" name="generoMascota" value="Hembra" <?= ($registro?($registro[0]->generoMascota=="Hembra"?"checked":""):'') ?>>
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