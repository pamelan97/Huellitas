<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Entities\PlacasEntities;

class PlacasMascotasModel extends Model

{

    protected $table = 'placasMascotas';

    protected $primaryKey = 'placasMascotas_id';

   

    protected $allowedFields = ['placasMascotas_id', 'registroMascota_id',];




    // Tipo de dato a devolver

    protected $returnType = 'App\Entities\PlacasEntities';



    public function  eliminar(PlacasEntities $unRegistro){

        $this->delete($unRegistro->id);

    }
    