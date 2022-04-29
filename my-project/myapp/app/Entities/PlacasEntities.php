<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class PlacasEntities extends Entity

{



    protected $datamap = [

        "id" => "placasMascotas_id",
        "idMascotas" => "registroUsuario_id",

    ];



    protected $casts   = [];

}

?>