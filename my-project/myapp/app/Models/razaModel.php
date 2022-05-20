<<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\razaEntity;
class razaModel extends Model
{
    protected $table = 'raza_mascota';
    protected $primaryKey = 'raza_id';
    
    protected $allowedFields = ['raza_id', 'descripcion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\razaEntity'; 

    public function  eliminar(razaEntity $unRaza){
        $this->delete($unRaza->id);
    }

    public function actualziar (razaEntity $unRaza){
        $parametros = [
            'descripcion' => $unRaza->descripcion,        
        ]
        ;

        $this->update($unRaza->id,$parametros);
    }


    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

}






