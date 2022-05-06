<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Throttle\ThrottlerInterface;
use App\Entities\RegistroMascotaEntity;
use App\Models\registroMascotaModel;
//
class LoginLogOutController extends BaseController
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroMascotaModel();
    // Buscamos los conciertos
    $mascotas = $mod->todEs();
    // UN EJEMPLO PARA MAS ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $mascotas;
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

            return view('placasmascotas/agregar01Placa'); //si tenmeos placa pendiente se registra mascota
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

