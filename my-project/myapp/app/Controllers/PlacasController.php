<?php

namespace App\Controllers;

use App\Entities\PlacasEntities;
use App\Models\PlacasMascotasModel;

class PlacasController extends BaseController
{
    public function registroplaca($idPlaca)
    {
        $model = new PlacasMascotasModel();
        $placaMascota = $model->getPlaca($idPlaca);

        if ($placaMascota->idMascotas){
            
        }
        else {
            return view('regitromascota');
        }
    }
}
