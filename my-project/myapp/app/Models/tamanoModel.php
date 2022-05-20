<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\tamanoEntity;
class tamanoModel extends Model
{
    protected $table = 'tamano_mascota';
    protected $primaryKey = 'tamano_id';
    
    protected $allowedFields = ['tamano_id', 'descripcion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\tamanoEntity'; 

    public function  eliminar(tamanoEntity $unTamano){
        $this->delete($unTamano->id);
    }

    public function actualziar (tamanoEntity $unTamano){
        $parametros = [
            'descripcion' => $unTamano->descripcion,        
        ]
        ;

        $this->update($unTamano->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

}






