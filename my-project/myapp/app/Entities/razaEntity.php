<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class razaEntity extends Entity
{
    protected $datamap = [
        "id_raza" => "raza_id",
        "descripcion" => "descripcion",
    ];

    protected $casts   = [];
}
?>