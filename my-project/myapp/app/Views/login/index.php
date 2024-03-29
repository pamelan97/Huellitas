<?php session_start () ?>
<?= $this->extend('/login/formaUsuario') ?>
<?= $this->section('contenido') ?>

<div class="d-flex justify-content-end ">
        <a href="<?php echo site_url('/registromascota') ?>" class="btn btn-success">Agregar Mascota</a>      
	</div><br>
  <div class="d-flex justify-content-end ">
  <a href="<?php echo site_url('/registromascotaindex') ?>" class="btn btn-info">Refrescar</a>
        
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
             <td><?php echo $reg['raza']->descripcion; ?></td>
             <td><?php echo $reg['tamano']->descripcion; ?></td>
             <td><?php echo $reg['genero']->descripcion; ?></td>
             <td><?php echo $reg['mascota']->telefono1; ?></td>
             <td><?php echo $reg['mascota']->telefono2; ?></td>
             <td>
              <a href="<?php echo site_url('/registromascota-editar/'.$reg['mascota']->id);?>" class="btn btn-primary">Editar</a><br><br>
              <a href="<?php echo site_url('/registromascota-eliminar/'.$reg['mascota']->id);?>" class="btn btn-danger">Eliminar</a><br><br>
              <a href="<?php echo site_url('/mascotaperdida/'.$reg['mascota']->id);?>" class="btn btn-warning btn-sm"><?= ($reg['mascota']->estadoMascotas==1?'Mascota Encontrada':'Mascota Perdida') ?></a><br><br>
             
             
             
              <?php if($reg['mensaje']):?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mensaje<?=$reg['mascota']->id?>">
                  ver mensajes
                </button>
                <div class="modal fade" id="mensaje<?=$reg['mascota']->id?>" tabindex="-1" role="dialog" aria-labelledby="mensaje<?=$reg['mascota']->id?>Title" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="mensaje<?=$reg['mascota']->id?>Title">Mensajes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <?php foreach($reg['mensaje'] as $mensaje){ ?>
                          <li><?=$mensaje->mensaje?> (<?=$mensaje->nombre?>, <?=$mensaje->telefono?>)</li>
                        <?php } ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
        



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