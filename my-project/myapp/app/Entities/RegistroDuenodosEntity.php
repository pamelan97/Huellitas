<?php



namespace App\Entities;



use CodeIgniter\Entity\Entity;



class RegistroDuenodosEntity extends Entity

{



    protected $datamap = [
        
        "duenoDos_id" => "duenosegundo_id",

        "correoDueno" => "duenosegundo_correo",

        "duenoTelefono1" => "duenosegundo_telefono1",

        "duenoTelefono2" => "duenosegundo_telefono2",
     
    ];



    protected $casts   = [];

}

?>

