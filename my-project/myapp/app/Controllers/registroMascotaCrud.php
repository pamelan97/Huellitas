<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Entities\RegistroMascotaEntity;
use App\Models\registroMascotaModel;
//
class registroMascotaCrud extends Controller
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
    return view('registromascota/listaMascota',$data);
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
    return view('registromascota/agregar01Mascota');
}

public function agregar02Mascota(){
    
    
    $model = new registroMascotaModel();
    $unamascota = $this->request->getVar('nombre_mascota');
        $mascota = $model->nombre_mascota($unamascota);
        // **$clave = $model->usuarioPorclave($unaClave);

        if (sizeof($mascota) !=1 ) {
             // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroMascotaEntity();
    $unRegistro->nombre_mascota =  $this->request->getVar('nombre_mascota');

    // Obtenemos la clase del Model que controla los conciertos
    $mod = new registroMascotaModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unRegistro);
    //
    return $this->index();
    
        }
        else{
           
                        return view('registromascota/agregar01Mascota'); 
           
            
        }
    
   
}

/** public function editar01Formulario($id){
  *  $data = $this->recuperauser($id);
   * //Vamos a la vista
    *return view('registro/editar01Formulario',$data);
*}

*public function editar02Continuar(){
 *   // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
  *  $unRegistro = new registro();
   * $unRegistro->id = $this->request->getVar('id');
    *$unRegistro->correo =  $this->request->getVar('correo');
   * $unRegistro->clave =  $this->request->getVar('clave');
   * // Obtenemos la clase del Model que controla los conciertos
   * *$mod = new registroModel();
   * // Mandamos la Transacciòn ala Base de DAtos
   * $mod->actualziar($unRegistro);
   * // vuelve al inicio
  * return $this->index();
*}

* public function eliminar01Formulario($id){
 *   $data = $this->recuperauser($id);
  *  //Vamos a la vista
   * return view('registro/eliminar',$data);
*}

*public function eliminar02Continuar(){
 *    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
  *   $unRegistro = new registro();
  *   $unRegistro->id = $this->request->getVar('id');
  *   // Obtenemos la clase del Model que controla los conciertos
  *   $mod = new registroModel();
  *   // Mandamos la Transacciòn ala Base de DAtos
  *   $mod->eliminar($unRegistro);   
  *   //Home
  *   return $this->index();
 *}

 *public function cancelar(){
  *  return $this->index();
 *}
*/
}
