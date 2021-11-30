<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituciones extends Model
{
    use HasFactory;

    protected $table = 'institucion';

    public static function mostrarInstituciones(){
    	$instituciones = self::select('institucion.id as id','institucion.nombre as nombre','institucion.direccion as direccion','institucion.cp as cp','institucion.telefono as telefono','institucion.correo as correo','estado.nombre as estado')
    					->join('estado','institucion.id_estado','estado.id')
    					->get();
    	$response = [];
    	foreach($instituciones as $item){
    		$id = $item->id;
    		$response[$id] = [
    			'id' => $item->id,
    			'nombre' => $item->nombre,
    			'direccion' => $item->direccion,
    			'cp' => $item->cp,
    			'telefono' => $item->telefono,
    			'correo' => $item->correo,
    			'estado' => $item->estado,
    		];
    	}
    	return $response;
    }

    public static function nombreInstitucion($id){
        $nombre = self::select('institucion.nombre as nombre')
                            ->where('institucion.id','=',$id)
                            ->get();
        $nombre = $nombre->toArray();
        return $nombre[0];
    }
    public static function mostrarInstitucion($id){
        $programas = self::select('programas.id as id','programas.nombre as nombre')
                            ->where('programas.id_institucion','=',$id)
                            ->join('programas','programas.id_institucion','institucion.id')
                            ->get();
        $response = [];
        foreach($programas as $item){
            $id = $item->id;
            $response[$id] = [
                'nombre' => $item->nombre,
            ];
        }
        return $response;
    }
}
