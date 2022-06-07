<?php session_start () ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>

<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/registromascota') ?>" class="btn btn-success mb-2">Agregar Mascota</a>
	</div>
<div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>ID</th>
             <th>Nombre Mascota</th>
             <th>Fecha de Nacimiento</th>
             <th>Raza Mascota</th>
             <th>Tamaño Mascota</th>
             <th>Genero Mascota</th>
             <th>Teléfono 1</th>
             <th>Teléfono 2</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
		   <?php
				// Primero se revisa que el arreglo "registros" no este vacio (siempre la BD puede devolver NADA)
				// Luego apra cada Concierto (reg  --- por registro) en el listado dibujamos la tablita
				// Brujeria maxima nivel 1: ahcemos link a los ver pero pasando el ID !!!  Ojo que podemos hacerlo igual para modificar y eliminar

				// Recordar que los path de lso links SON los de los Routes no lo de los sistemas operativos

				// Los nombres de lso clases salen de acá
				// https://getbootstrap.com/docs/4.0/components/buttons/
				// Simpre respetar usar el mismo foramto
		   ?>
          <?php if($registros): ?>
          <?php foreach($registros as $reg): ?>
          <tr>
             <td><?php echo $reg['mascota']->id; ?></td>
             <td><?php echo $reg['mascota']->nombreMascota; ?></td>
             <td><?php echo $reg['mascota']->fechaMascota; ?></td>
             <td><?php echo $reg['mascota']->razaMascota; ?></td>
             <td><?php echo $reg['mascota']->tamanoMascota; ?></td>
             <td><?php echo $reg['mascota']->generoMascota; ?></td>
             <td><?php echo $reg['mascota']->telefono1; ?></td>
             <td><?php echo $reg['mascota']->telefono2; ?></td>
             <td>
              <a href="<?php echo site_url('/registromascota-editar/'.$reg['mascota']->id);?>" class="btn btn-primary btn-sm">Editar</a><br><br>
              <a href="<?php echo site_url('/registromascota-eliminar/'.$reg['mascota']->id);?>" class="btn btn-danger btn-sm">Eliminar</a><br><br>
              <a href="<?php echo site_url('/mascotaperdida/'.$reg['mascota']->id);?>" class="btn btn-warning btn-sm"><?= ($reg['mascota']->estadoMascotas==1?'Mascota Encontrada':'Mascota Perdida') ?></a><br><br>
              <?php if($reg['mensaje']):?>
              <a href="#" onclick="alert('<?= 'Te informamos que ' .$reg['mensaje']->nombre. ', acaba de encontrar a tu mascota, te dejo el siguiente mensaje: ' .$reg['mensaje']->mensaje. ', junto a su número de contacto: ' .$reg['mensaje']->telefono. ', ¡Ponte en contacto pronto!' ?>')" class="btn btn btn-info btn-sm">¡Tienes un mensaje!</a><br><br>  
              <?php endif; ?>
            </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
  <script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>

<?= $this->endSection() ?>