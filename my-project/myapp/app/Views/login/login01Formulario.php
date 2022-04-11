<?= $this->extend('/login/formausuario') ?>
<?= $this->section('contenido') ?>
<div class="mt-3">
    <ul>
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
            <li>
                <a href="<?php echo site_url('/LoginLogOutController/login02Validar'.$reg->id);?>">
                    <?php echo $reg->usuario_correo; ?>
                </a>    
            </li>     
         <?php endforeach; ?>
         <?php endif; ?>
    </ul>
  </div>

<?= $this->endSection() ?>