<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
<form method="post" id="add_create" name="add_create" action="<?= site_url('login-login01Validar/') ?>">
     <input type="text" name="el_correo"/>
     <input type="password" name="la_clave"/>
     <button type="submit" class="btn btn-primary btn-sm">Registrarse</button>
   </form>
  </div>

<?= $this->endSection() ?>