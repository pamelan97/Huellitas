<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\generoEntity;
class generoModel extends Model
{
    protected $table = 'genero_mascota';
    protected $primaryKey = 'genero_id';
    
    protected $allowedFields = ['genero_id', 'descripcion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\generoEntity'; 

    public function  eliminar(generoEntity $unGenero){
        $this->delete($unGenero->id);
    }

    public function actualziar (generoEntity $unGenero){
        $parametros = [
            'descripcion' => $unGenero->descripcion,        
        ]
        ;

        $this->update($unGenero->id,$parametros);
    }
 

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
      return $this->findAll();
     }

}






