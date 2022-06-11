<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class estadoMascotasEntity extends Entity

{



    protected $datamap = [

        "id" => "estadoMascotas_id",
        "descripcion" => "descripcion",

    ];



    protected $casts   = [];

}

?>