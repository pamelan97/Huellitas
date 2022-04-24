<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class RegistroMascotaEntity extends Entity
{

    protected $datamap = [
        "id" => "mascota_id",
        "mascota_nombre" => "mascota_nombre",
        "mascota_nombre" => "mascota_nombre",
        "mascota_nacimiento" => "mascota_nacimiento",
        "mascota_raza" => "mascota_raza",
      
    ];

    protected $casts   = [];
}
?>