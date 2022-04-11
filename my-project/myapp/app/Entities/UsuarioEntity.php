<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioEntity extends Entity
{
    protected $datamap = [
        "id" => "usuario_id",
        "correo" => "usuario_correo",
        "clave" => "usuario_clave",
    ];

    protected $casts   = [];
}
?>