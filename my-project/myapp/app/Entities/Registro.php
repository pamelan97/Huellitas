<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Registro extends Entity
{

    protected $datamap = [
        "id" => "usuario_id",
        "correo" => "usuario_correo",
        "clave" => "usuario_clave",
    ];

    protected $casts   = [];
}
?>