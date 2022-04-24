<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Registro extends Entity
{

    protected $datamap = [
        "id" => "usuario_id",
        "correo" => "usuario_correo",
        "clave" => "usuario_clave",
        "telefono1" => "usuario_telefono1",
        "telefono2" => "usuario_telefono2",
        "nombreMascota" => "usuario_nombre_mascota",
        "fechaMascota" => "usuario_nacimiento_mascota",
        "razaMascota" => "usuario_raza_mascota",
    ];

    protected $casts   = [];
}
?>