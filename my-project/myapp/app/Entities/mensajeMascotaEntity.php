<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class mensajeMascotaEntity extends Entity

{



    protected $datamap = [

        "mensaje_id" => "mensaje_id",

        "mascota_id" => "mascota_id",

        "nombre" => "nombre",

        "telefono" => "telefono",
        
        "mensaje" => "mensaje",

    ];



    protected $casts   = [];

}

?>