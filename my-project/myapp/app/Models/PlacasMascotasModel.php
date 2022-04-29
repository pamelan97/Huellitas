<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Entities\PlacasEntities;

class PlacasMascotasModel extends Model

{

    protected $table = 'placasMascotas';

    protected $primaryKey = 'placasMascotas_id';

   

    protected $allowedFields = ['placasMascotas_id', 'usuarioRegistro_id',];




    // Tipo de dato a devolver

    protected $returnType = 'App\Entities\PlacasEntities';



    public function  eliminar(PlacasEntities $unRegistro){

        $this->delete($unRegistro->id);

    }



    public function actualziar (PlacasEntities $unRegistro){



         $parametros = [

            'placasMascotas_id' => $unRegistro->id,

            'usuarioRegistro_id' => $unRegistro->idMascotas,          

        ]

        ;



        $this->update($unRegistro->id,$parametros);

    }



    public function todEs(){

        return $this->orderBy('placasMascotas_id', 'DESC')->findAll(); 

    }

    public function getPlaca($pk){
            $unaPlaca = $this->find($pk);
            error_log(gettype($unaPlaca));
            return $unaPlaca;
        }
}

?>