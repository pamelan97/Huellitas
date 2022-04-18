<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Throttle\ThrottlerInterface;

class LoginLogOutController extends BaseController
{
    public function index(){
        // Pal Home
        return view('login/index');
    }
    public function login01Formulario()
    {
        // Como Debe funcionar
        // ** Mosrar el formulario de Login

        // Por mientras
        // ** Lista de usaurios desde la BD
        
        return view('login/login01Formulario');
    }

    public function login02Validar()
    {
        // Como debe funcioanr
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
            return $this->index();
    
        }
        else{
           
            echo "Disculpe, no esta registrado con nosotros";
            return $this->login01Formulario();  
            
        }
        
           
    }

    public function logout(){
        // Sacamos el USR de la Session

        //Pal Home
        return $this->index();
    }

}

