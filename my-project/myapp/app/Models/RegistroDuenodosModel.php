<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Entities\RegistroDuenodosEntity;

class registroDuenodosModel extends Model

{

    protected $table = 'duenoSegundoRegistro';

    protected $primaryKey = 'duenosegundo_id';

   

    protected $allowedFields = ['duenosegundo_id', 'duenosegundo_telefono1', 'duenosegundo_telefono2', 'duenosegundo_correo'];



    // Tipo de dato a devolver

    protected $returnType = 'App\Entities\RegistroDuenodosEntity';



    public function  eliminar(RegistroDuenodosEntity $unRegistro){

        $this->delete($unRegistro->id);

    }



    public function actualziar (RegistroDuenodosEntity $unRegistro){


         $parametros = [
            'duenosegundo_id' => $unRegistro->duenoDos_id,

            'duenosegundo_telefono1' => $unRegistro->duenoTelefono1,

            'duenosegundo_telefono2' => $unRegistro->duenoTelefono2,

            'duenosegundo_correo' => $unRegistro->duenoCorreo,

        ]

        ;



        $this->update($unRegistro->id,$parametros);

    }

    public function unaMascota(Int $id){
        $unDueno = $this->builder();

        $unDueno->where('duenosegundo_id',$id); //la mascota del dueño id

        $consulta = $unDueno->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroDuenodosEntity');
    }

    public function todEs(){

        return $this->orderBy('duenosegundo_correo', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE

    }



    public function soloConA(){

        $b = $this->builder();

        $b->like('duenosegundo_correo','A'); // esto es concierto_nombre like '%A%'

        $b->orderBy('duenosegundo_telefono1', 'ASC');

        $consulta = $b->get();

        return $consulta->getCustomResultObject('App\Entities\RegistroDuenodosEntity');

    }

}
?>