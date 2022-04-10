<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class NavegarBaseController extends Controller{
    public function index(){
        return view('base/lista');
    }

    public function ver(){
        return view('base/ver');
    }

    public function editar01Formulario(){
        return view('base/editar01Formulario');
    }

    public function editar02Continuar(){
       //valida datos 
       // manda la tx
       // vuelve al inicio
       return view('base/lista');
    }


    public function eliminar(){
        return view('base/eliminar');
    }


    public function eliminar02Continuar(){
        //valida datos 
        // manda la tx
        // vuelve al inicio
        return view('base/lista');
     }
 

}