<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class tamanoEntity extends Entity
{
    protected $datamap = [
        "id_tamano" => "tamano_id",
        "descripcion" => "descripcion",
    ];

    protected $casts   = [];
}
?>