<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Entities\Registro;

class registroModel extends Model

{

    protected $table = 'usuarios';

    protected $primaryKey = 'usuario_id';

   

    protected $allowedFields = ['usuario_correo', 'usuario_clave'];



    // Tipo de dato a devolver

    protected $returnType = 'App\Entities\Registro';



    public function  eliminar(Registro $unRegistro){

        $this->delete($unRegistro->id);

    }



    public function actualziar (Registro $unRegistro){

        /*

        // Escribiendo la consulta via "keys"

        $sql_update = "update conciertos set concierto_nombre = :nombre:, concierto_ubicacion= :ubicacion: where concierto_id =:id:";

        $parametros = [

            'nombre' => $unConcierto->nombre,

            'ubicacion' => $unConcierto->ubicacion,

            'id' => $unConcierto->id

        ]

        ;

        if (!

            $this->db->query(

                $sql_update,

                $parametros

            )

        ) {

            $error = $db->error();

            error_log($error);

        }

       

        */
   /*

        // Aplicando el SQL Builder

        $parametros = [

            'concierto_nombre' => $unConcierto->nombre,

            'concierto_ubicacion' => $unConcierto->ubicacion

        ]

        ;

        $this->where('concierto_id',$unConcierto->id)

            ->set($parametros)

            ->update();

        */  



        // Abusando del framework porque estamos actualziando por llave priamria

        $parametros = [

            'usuario_correo' => $unRegistro->correo,

            'usuario_clave' => $unRegistro->clave

        ]

        ;



        $this->update($unRegistro->id,$parametros);

    }



    public function todEs(){

        return $this->orderBy('usuario_correo', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE

    }



    public function soloConA(){

        $b = $this->builder();

        $b->like('usuario_correo','A'); // esto es concierto_nombre like '%A%'

        $b->orderBy('usuario_clave', 'ASC');

        $consulta = $b->get();

        return $consulta->getCustomResultObject('App\Entities\Registro');

    }

}
?>
     