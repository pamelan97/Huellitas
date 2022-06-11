<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class estadoMensajeEntity extends Entity

{



    protected $datamap = [

        "id" => "estadoMensaje_id",
        "descripcion" => "descripcion",

    ];



    protected $casts   = [];

}

?>