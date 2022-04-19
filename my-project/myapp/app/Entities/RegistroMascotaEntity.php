<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroMascotaEntity extends Entity
{

    protected $datamap = [
        "id" => "placa_id",
        "nombre_mascota" => "placa_nombre_mascota",
      
    ];

    protected $casts   = [];
}
?>