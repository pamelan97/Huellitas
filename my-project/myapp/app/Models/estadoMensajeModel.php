<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\estadoMensajeEntity;
class estadoMensajeModel extends Model
{
    protected $table = 'estadoMensaje';
    protected $primaryKey = 'estadoMensaje_id';
    
    protected $allowedFields = ['estadoMensaje_id', 'descripcion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\estadoMensajeEntity'; 

    public function  eliminar(estadoMensajeEntity $unEstadoMensaje){
        $this->delete($unEstadoMensaje->estadoMascotas_id);
    }

    public function actualziar (estadoMensajeEntity $unEstadoMensaje){
        $parametros = [
            'descripcion' => $unEstadoMensaje->descripcion,        
        ]
        ;

        $this->update($unEstadoMensaje->estadoMensaje_id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

}