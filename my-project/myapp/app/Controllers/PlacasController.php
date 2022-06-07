<?php

namespace App\Controllers;

use App\Models\PlacasMascotasModel;
use App\Models\registroMascotaModel;
use App\Models\razaModel;
use App\Models\tamanoModel;
use App\Models\generoModel;
use App\Models\mensajeMascotaModel;

class PlacasController extends BaseController
{
    public function registroplaca($idPlaca)
    {

        $modgenero = new generoModel();
        $generos = $modgenero->todos();
        $data['generos'] = $generos;
    
    
        $modraza = new razaModel();
        $razas = $modraza->todos();
        $data['razas'] = $razas;
    
    
    
        $modtamano = new tamanoModel();
        $tamanos = $modtamano->todos();
        $data['tamanos'] = $tamanos;

        $modmensaje = new mensajeMascotaModel();
        $mensajes = $modmensaje->todos();
        $data['mensaje'] = $mensajes;


        $model = new PlacasMascotasModel();
        $placaMascota = $model->getPlaca($idPlaca);
        session_start();
         $_SESSION['PLACA']= $placaMascota;

        if ($placaMascota->idMascotas){
                // cpnsultar datos de la mascota registrada para ese usr
                $mod2 = new registroMascotaModel();
                $mascota = $mod2->unaMascota($placaMascota->idMascotas);
                $data['registro'] = $mascota;

            
           return view('estadomascota/mascotasaludo', $data);
        }
        else {
            $usuario=$_SESSION['USR'];
        
        if($usuario){

            return view('placasmascotas/agregar01Placa', $data); //es cuando existe el usuario esta autenticado
        }
        else{
            
            return view('welcome_message'); //cuando no esta atenticado el USR
        
        }
    }
}
}