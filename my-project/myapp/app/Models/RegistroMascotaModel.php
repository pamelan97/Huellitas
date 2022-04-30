<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Entities\RegistroMascotaEntity;

class registroMascotaModel extends Model

{

    protected $table = 'usuarioRegistro1';

    protected $primaryKey = 'id';

   

    protected $allowedFields = ['usuarioRegistro_id', 'usuario_telefono1', 'usuario_telefono2', 'usuario_nombre_mascota' , 'usuario_nacimiento_mascota', 'usuario_raza_mascota'.'usuario_tamano_mascota','usuario_genero_mascota'];




    // Tipo de dato a devolver

    protected $returnType = 'App\Entities\RegistroMascotaEntity';



    public function  eliminar(RegistroMascotaEntity $unRegistro){

        $this->delete($unRegistro->id);

    }



    public function actualziar (RegistroMascotaEntity $unRegistro){


         $parametros = [
            'usuarioRegistro_id' => $unRegistro->usuario_id,

            'usuario_telefono1' => $unRegistro->telefono1,

            'usuario_telefono2' => $unRegistro->telefono2,

            'usuario_nombre_mascota' => $unRegistro->nombreMascota,

            'usuario_nacimiento_mascota' => $unRegistro->fechaMascota,

            'usuario_raza_mascota' => $unRegistro->razitaMascota,

            'usuario_tamano_mascota' => $unRegistro->tamanitoMascota,
            
            'usuario_genero_mascota' => $unRegistro->generoMascota,

        ]

        ;



        $this->update($unRegistro->id,$parametros);

    }

    public function unaMascota(Int $id){
        $unaMascota = $this->builder();

        $unaMascota->where('usuarioRegistro_id',$id); //la mascota del dueño id

        $consulta = $unaMascota->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroMascotaEntity');
    }

    public function todEs(){

        return $this->orderBy('usuario_nombre_mascota', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE

    }



    public function soloConA(){

        $b = $this->builder();

        $b->like('usuario_nombre_mascota','A'); // esto es concierto_nombre like '%A%'

        $b->orderBy('usuario_nacimiento_mascota', 'ASC');

        $consulta = $b->get();

        return $consulta->getCustomResultObject('App\Entities\RegistroMascotaEntity');

    }

}
?>
