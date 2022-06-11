<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\mensajeMascotaEntity;
class mensajeMascotaModel extends Model
{
    protected $table = 'mensajeMascota';
    protected $primaryKey = 'mensaje_id';
    
    protected $allowedFields = ['mensaje_id', 'mascota_id', 'nombre', 'telefono', 'mensaje', 'estadoMensaje'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\mensajeMascotaEntity'; 

    public function  eliminar(mensajeMascotaEntity $unMensaje){
        $this->delete($unMensaje->mensaje_id);
    }

    public function actualziar (mensajeMascotaEntity $unMensaje){
        $parametros = [
            'mensaje_id' => $unMensaje->mensaje_id,

            'mascota_id' => $unMensaje->mascota_id,

            'nombre' => $unMensaje->nombre,

            'telefono' => $unMensaje->telefono,

            'mensaje' => $unMensaje->mensaje,

            'estadoMensaje' => $unMensaje->estado_id,
        ]
        ;

        $this->update($unMensaje->mensaje_id,$parametros);
    }


    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }




     public function ultimomensaje ($id){
        return $this->mensajesActivos($id)[0]; 
     }

     public function mensajesActivos ($id){
         

        $this->where('mascota_id',$id); 


        $this->where('estadoMensaje', 1); 


        $this->orderBy('mensaje_id', 'DESC');

        $consulta = $this->findAll();


        return $consulta; 
    

     }


}