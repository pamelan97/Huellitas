<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Entities\RegistroDuenodosEntity;
use App\Models\registroDuenodosModel;
//
class registroDuenodosCrud extends BaseController
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroDuenodosModel();
    // Buscamos los conciertos
    $duenos = $mod->todEs();
    // UN EJEMPLO PARA MAS ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $duenos;
    // Vamos a la vista ... pero con los datos!!!
    return view('login/index',$data);
}

private function recuperauser($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroDuenodosModel();
    // Buscamos el Concierto por la PK
    $dueno = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['registro'] = $dueno;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('registroduenodos/ver',$data);
}

public function agregar01Dueno(){
    return view('registroduenodos/agregar01Dueno');
}

public function agregar02Dueno(){
    
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroDuenodosEntity();
    $unRegistro->usuario_id =  $this->request->getVar('usuario_id');
    $unRegistro->duenoTelefono1 =  $this->request->getVar('duenosegundo_telefono1');
    $unRegistro->duenoTelefono2 =  $this->request->getVar('duenosegundo_telefono2');
    $unRegistro->correoDueno =  $this->request->getVar('duenosegundo_correo');
    

    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroDuenodosModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unRegistro);
    //
    return $this->index();
    
   
}

 public function cancelar(){
    return $this->index();
 }
}