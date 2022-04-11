<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

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
        $model = new UsuarioModel();
        $usuarios = $model->todos();
        $data['registros'] = $usuarios;
        return view('login/login01Formulario',$data);
    }

    public function login02Validar($pk)
    {
        // Como swbe funcioanr
        // ** Recueprar los datos 
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioModel();
        $usuario = $model->unUsuario($pk);
        // Lo poenmos en sesion
        session_start();
        $_SESSION['USR']= $usuario;
        // Pal Home!!!
        return $this->index();
    }

    public function logout(){
        // Sacamos el USR de la Session

        //Pal Home
        return $this->index();
    }

}
