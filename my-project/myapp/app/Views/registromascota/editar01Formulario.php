<?= $this->extend('formaStandar') ?>

<?= $this->section('contenido') ?>

  <div class="container mt-5">
  <h1>Actualizar datos de Mascota</h1>
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/registromascota-editar-continuar') ?>">
    <input type="hidden" name="id" value="<?php echo($registro->id);?>"/>
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
    <div class="form-group">
      <label>Ingrese la nueva raza de su mascota</label>
      <input type="text" name="razitaMascota" class="form-control" value="<?php echo($registro->razaMascota); ?>" required />
    </div>
<p>
  <label for="Tamano"> Ingresa el nuevo tamaño de tu mascota:</label>

  <select name="tamanitoMascota">
    <option value="Pequena">Raza pequeña</option>
    <option value="Mediana">Raza Mediana</option>
    <option value="Grande">Raza Grande</option>
  </select>
</p>

<p>
  <label for="Genero"> Ingresa el nuevo genero de tu mascota:</label>
</p>
<p>
  <input type="radio" name="generoMascota" value="Macho">
  "Macho"
  <br>
</p>
<p>
  <input type="radio" name="generoMascota" value="Hembra">
  "Hembra"
  <br>
</p>
<div class="form-group">
  <button type="submit" class="btn btn-primary btn-sm">ACTUALIZAR DATOS DE MASCOTA</button>
  <a href="<?php echo site_url('######'); ?>" class="btn btn-secondary btn-sm">Cancelar</a>
</div>
    </form>
  </div>
  
<?= $this->endSection() ?>