<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\razaModel;
use App\Models\tamanoModel;
use App\Models\generoModel;
use App\Models\registroMascotaModel;
use App\Models\MensajeMascotaModel;
//
class LoginLogOutController extends BaseController
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroMascotaModel();
    // Buscamos los conciertos
    session_start ();
    $mascotas = $mod->unicos($_SESSION['USR']->id);

    // Ponemos en la 'data transiente' la data que queremos mostrar
    $mod2 = new mensajeMascotaModel();
    
    foreach($mascotas as $mascota){
        $unMensaje = $mod2->ultimomensaje($mascota->id);

        $datamascota['mascota']=$mascota;
        $datamascota['mensaje']=$unMensaje;
        $data['registros'][]=$datamascota;
    }
    // Vamos a la vista ... pero con los datos!!!
    return view('login/index',$data);
}
    public function login01Formulario()
    {
        // Como Debe funcionar
        // ** Mosrar el formulario de Login

        // Por mientras xxxxx
        // ** Lista de usaurios desde la BD
        
        return view('login/login01Formulario');
    }

    public function login02Validar()
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


        // Como debe funcioanr-
        // ** Recueprar los datos
        $unCorreo = $_POST["el_correo"];
        $unaClave = $_POST["la_clave"];
        
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioModel();
        $usuario = $model->usuarioPorCorreo($unCorreo,$unaClave);
        // **$clave = $model->usuarioPorclave($unaClave);

        if (sizeof($usuario) ==1 ) {
            session_start();
            $_SESSION['USR']= $usuario[0];
         // **   $_SESSION['USR']= $clave[0];
            $placa=$_SESSION['PLACA'];

        if($placa){

            return view('placasmascotas/agregar01Placa', $data); //si tenmeos placa pendiente se registra mascota
        }
        else{
        
            return $this->index();
    
        }
    }
        else{
           
            echo "Correo electrónico y/o contraseña inválidos.";
            return $this->login01Formulario();  
            
        }
        
           
    }


    public function logout(){
        // Sacamos el USR de la Session
        session_start();
        session_unset();
        //Pal Home
        return view('welcome_message');

    }

}