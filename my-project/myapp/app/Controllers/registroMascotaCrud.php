<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Entities\RegistroMascotaEntity;
use App\Models\generoModel;
use App\Models\tamanoModel;
use App\Models\razaModel;
use App\Models\registroMascotaModel;
use App\Models\PlacasMascotasModel;
//
class registroMascotaCrud extends BaseController
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

private function recuperauser($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroMascotaModel();
    // Buscamos el Concierto por la PK
    $mascota = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['registro'] = $mascota;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('registromascota/ver',$data);
}

public function agregar01Mascota(){

    $modgenero = new generoModel();
    $generos = $modgenero->todos();
    $data['generos'] = $generos;


    $modraza = new razaModel();
    $razas = $modraza->todos();
    $data['razas'] = $razas;



    $modtamano = new tamanoModel();
    $tamanos = $modtamano->todos();
    $data['tamanos'] = $tamanos;


    return view('registromascota/agregar01Mascota', $data);
}

public function agregar01Placa($placa_id){
    $data['placa_id'] = $placa_id;
    // modelo de placas para ver si esta asociada a un usuario
    $mod = new PlacasMascotasModel();
    $placa = $mod->getPlaca($placa_id); //obtener el dieño de una placa
    $data['placa'] = $placa;

    if ($placa->usuarioRegistro_id){
        // cpnsultar datos de la mascota registrada para ese usr
        $mod2 = new registroMascotaModel();
        $mascota = $mod2->unaMascota($placa->usuarioRegistro_id);
        $data['registro'] = $mascota;
    }
    return view('placasmascotas/agregar01Placa', $data);
}

public function agregar02PlacaMascota(){
    
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
   $unRegistro = new RegistroMascotaEntity();
   $unRegistro->usuario_id =  $this->request->getVar('usuario_id');
   $unRegistro->telefono1 =  $this->request->getVar('telefono1');
   $unRegistro->telefono2 =  $this->request->getVar('telefono2');
   $unRegistro->nombreMascota =  $this->request->getVar('nombreMascota');
   $unRegistro->fechaMascota =  $this->request->getVar('fechaMascota');
   $unRegistro->razaMascota =  $this->request->getVar('razaMascota');
   $unRegistro->tamanoMascota =  $this->request->getVar('tamanoMascota');
   $unRegistro->generoMascota =  $this->request->getVar('generoMascota');
   

   // Obtenemos la clase del Model que controla los conciertos
   $mod = new registroMascotaModel();
   // MAndamos la Transacciòn ala Base de DAtos
   $mod->save($unRegistro);
   //
   return $this->index();
   
  
}

public function agregar02Mascota(){
    
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroMascotaEntity();
    $unRegistro->usuario_id =  $this->request->getVar('usuario_id');
    $unRegistro->telefono1 =  $this->request->getVar('telefono1');
    $unRegistro->telefono2 =  $this->request->getVar('telefono2');
    $unRegistro->nombreMascota =  $this->request->getVar('nombreMascota');
    $unRegistro->fechaMascota =  $this->request->getVar('fechaMascota');
    $unRegistro->razaMascota =  $this->request->getVar('razaMascota');
    $unRegistro->tamanoMascota =  $this->request->getVar('tamanoMascota');
    $unRegistro->generoMascota =  $this->request->getVar('generoMascota');
    

    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroMascotaModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unRegistro);
    //
    return $this->index();
    
   
}

public function editar01Formulario($id){
    $data = $this->recuperauser($id);
     //Vamos a la vista
     return view('registromascota/editar01Formulario',$data);
    }
    
    public function editar02Continuar(){
        // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
        $unRegistro = new RegistroMascotaEntity();
        $unRegistro->usuario_id =  $this->request->getVar('usuario_id');
        $unRegistro->telefono1 =  $this->request->getVar('telefono1');
        $unRegistro->telefono2 =  $this->request->getVar('telefono2');
        $unRegistro->nombreMascota =  $this->request->getVar('nombreMascota');
        $unRegistro->fechaMascota =  $this->request->getVar('fechaMascota');
        $unRegistro->razaMascota =  $this->request->getVar('razaMascota');
        $unRegistro->tamanoMascota =  $this->request->getVar('tamanoMascota');
        $unRegistro->generoMascota =  $this->request->getVar('generoMascota');
    
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new registroMascotaModel();
        // Mandamos la Transacciòn ala Base de DAtos
        $mod->actualziar($unRegistro);
        // vuelve al inicio
       return $this->index();
    }
    
    
    public function eliminar01Formulario($id){
        $data = $this->recuperauser($id);
        //Vamos a la vista
        return view('registromascota/eliminar',$data);
    }
    
    public function eliminar02Continuar(){
        // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
       $unRegistro = new RegistroMascotaEntity();
         $unRegistro->id = $this->request->getVar('usuario_id');
         // Obtenemos la clase del Model que controla los conciertos
         $mod = new registroMascotaModel();
         // Mandamos la Transacciòn ala Base de DAtos
         $mod->eliminar($unRegistro);   
         //Home
         return $this->index();
     }
    
     public function cancelar(){
        return $this->index();
     }
    }