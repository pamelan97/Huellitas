<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class generoEntity extends Entity
{
    protected $datamap = [
        "id_genero" => "genero_id",
        "descripcion" => "descripcion",
    ];

    protected $casts   = [];
}
?>