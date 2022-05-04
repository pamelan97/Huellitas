<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class RegistroMascotaEntity extends Entity

{



    protected $datamap = [

        "id" => "id",
        
        "usuario_id" => "usuarioRegistro_id",

        "telefono1" => "usuario_telefono1",

        "telefono2" => "usuario_telefono2",

        "nombreMascota" => "usuario_nombre_mascota",

        "fechaMascota" => "usuario_nacimiento_mascota",

        "razaMascota" => "usuario_raza_mascota",

        "tamanoMascota" => "usuario_tamano_mascota",

        "generoMascota" => "usuario_genero_mascota",
     

    ];



    protected $casts   = [];

}

?>