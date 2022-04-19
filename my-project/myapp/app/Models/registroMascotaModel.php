<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroMascotaEntity;
class registroMascotaModel extends Model
{
    protected $table = 'placas';
    protected $primaryKey = 'placa_id';
    
    protected $allowedFields = ['placa_nombre_mascota'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroMascotaEntity'; 

    public function  eliminar(RegistroMascotaEntity $unRegistro){
        $this->delete($unRegistro->id);
    }

    public function actualziar (RegistroMascotaEntity $unRegistro){
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
            'placa_nombre_mascota' => $unRegistro->nombre_mascota,
                   
        ]
        ;

        $this->update($unRegistro->id,$parametros);
    }

    public function todEs(){
        return $this->orderBy('placa_nombre_mascota', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->like('placa_nombre_mascota','A'); // esto es concierto_nombre like '%A%'
    
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroMascotaEntity');
    }
}