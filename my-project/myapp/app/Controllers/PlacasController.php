<?php

namespace App\Controllers;

use App\Entities\PlacasEntities;
use App\Models\PlacasMascotasModel;
use App\Models\registroMascotaModel;

class PlacasController extends BaseController
{
    public function registroplaca($idPlaca)
    {
        $model = new PlacasMascotasModel();
        $placaMascota = $model->getPlaca($idPlaca);
        session_start();
         $_SESSION['PLACA']= $placaMascota;

        if ($placaMascota->usuarioRegistro_id){
                // cpnsultar datos de la mascota registrada para ese usr
                $mod2 = new registroMascotaModel();
                $mascota = $mod2->unaMascota($placaMascota->usuarioRegistro_id);
                $data['registro'] = $mascota;
            
            return view('placasmascotas/agregar01Placa', $data);
        }
        else {
            $usuario=$_SESSION['USR'];
        
        if($usuario){

            return view('placasmascotas/agregar01Placa'); //es cuando existe el usuario esta autenticado
        }
        else{
            
            return view('welcome_message'); //cuando no esta atenticado el USR
        
        }
    }
}
}
