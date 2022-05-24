<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\registroModel;
use App\Entities\Registro;
use App\Models\UsuarioModel;
use App\Models\razaModel;
use App\Models\tamanoModel;
use App\Models\generoModel;
//
class registroCrud extends Controller
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroModel();
    // Buscamos los conciertos
    $usuarios = $mod->todEs();
    // UN EJEMPLO PARA MAS ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $usuarios;
    // Vamos a la vista ... pero con los datos!!!
    return view('registro/lista',$data);
}

private function recuperauser($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroModel();
    // Buscamos el Concierto por la PK
    $usuarios = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['registro'] = $usuarios;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('registro/ver',$data);
}

public function agregar01Formulario(){
    return view('registro/agregar01Formulario');
}

public function agregar02Continuar(){
      
             // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new registro();
    $unRegistro->correo =  $this->request->getVar('correo');
    $unRegistro->clave =  $this->request->getVar('clave');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $id=$mod->insert($unRegistro);
    //
    session_start();
    $mod2= new UsuarioModel();
    $usuario=$mod2->unUsuario($id);
    $_SESSION['USR']=$usuario;
    $placa=$_SESSION['PLACA'];
    if($placa){

        $modgenero = new generoModel();
        $generos = $modgenero->todos();
        $data['generos'] = $generos;
    
    
        $modraza = new razaModel();
        $razas = $modraza->todos();
        $data['razas'] = $razas;
    
    
    
        $modtamano = new tamanoModel();
        $tamanos = $modtamano->todos();
        $data['tamanos'] = $tamanos;

        return view('placasmascotas/agregar01Placa', $data);
        
    }
    else
    return $this->index(); //TENGO QUE PONER UN IF, IF LA PLACA PENIDENTE ES DISTINTA DE NULL
   
    }

 public function cancelar(){
    return $this->index();
 }

}

?>