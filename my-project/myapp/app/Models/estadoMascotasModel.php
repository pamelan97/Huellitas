<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\estadoMascotasEntity;
class estadoMascotasModel extends Model
{
    protected $table = 'estadoMascotas';
    protected $primaryKey = 'estadoMascotas_id';
    
    protected $allowedFields = ['estadoMascotas_id', 'descripcion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\estadoMascotasEntity'; 

    public function  eliminar(estadoMascotasEntity $unEstado){
        $this->delete($unEstado->estadoMascotas_id);
    }

    public function actualziar (estadoMascotasEntity $unEstado){
        $parametros = [
            'descripcion' => $unEstado->descripcion,        
        ]
        ;

        $this->update($unEstado->estadoMascotas_id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

}