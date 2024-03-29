<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\UsuarioEntity;
class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    
    protected $allowedFields = ['usuario_correo', 'usuario_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\UsuarioEntity'; 

    public function  eliminar(UsuarioEntity $unUsuario){
        $this->delete($unUsuario->id);
    }

    public function actualziar (UsuarioEntity $unUsuario){
        $parametros = [
            'usuario_correo' => $unUsuario->correo,
            'usuario_clave' => $unUsuario->clave          
        ]
        ;

        $this->update($unUsuario->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

    public function  unUsuario(Int $pk){
        $unUsuario = $this->find($pk);
        error_log(gettype($unUsuario));
        return $unUsuario;
    }

    public function usuarioPorCorreo($unCorreo,$unaClave){
        // Instancia de builder SQL
        $unBuilder = $this->builder();
        // Que el correo sea el valor que quiero
        $unBuilder->where('usuario_correo',$unCorreo); //
        $unBuilder->where('usuario_clave',$unaClave); 
        $consulta = $unBuilder->get();
        return $consulta->getCustomResultObject('App\Entities\UsuarioEntity');
    }
}






