<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    use HasFactory;

    protected $table = 'buzon';

    public static function numPaginas($num){
    	if($num%10 == 0){
    		return ($num/10);
    	}else{
    		$num = $num/10;
    		$num = (int) $num;
    		$num++;
    		return $num;
    	}
    }
    public static function indiceDatos($num){
        //$num = ($num*10)-9;
        $num = ($num*10)-10;
        return $num;
    }

    public static function guardarHistoria($data){
        $data['titulo'] = htmlspecialchars($data['titulo']);
        $data['texto'] = htmlspecialchars($data['texto']);
        $historia = new Buzon;
        $historia->titulo = $data['titulo'];
        $historia->texto = $data['texto'];
        $historia->save();
        if($historia->save()){
            return true;
        }else{
            return false;
        }
    }

    public static function mostrarHistorias($num){
        $indice = self::indiceDatos($num);
        $historias = self::select('buzon.id as id','buzon.titulo as titulo','buzon.texto as texto','buzon.created_at as fecha')
                    ->orderByDesc('created_at')
                    ->offset($indice)
                    ->limit(10)
                    ->get();
        $response = [];
        foreach($historias as $item){
            $id = $item->id;
            $response[$id] = [
                'id' => $item->id,
                'titulo'=>$item->titulo,
                'texto' => $item->texto,
                'fecha' => $item->fecha,
            ];
        }
        return $response;

    }
    public static function mostrarHistoria($id){
        $historias = self::select('buzon.id as id','buzon.titulo as titulo','buzon.texto as texto','buzon.created_at as fecha')
                    ->where([
                        ['buzon.id','=',$id],
                    ])
                    ->get();
        $response = [];
        foreach($historias as $item){
            $response = [
                'id' => $item->id,
                'titulo'=>$item->titulo,
                'texto' => $item->texto,
                'fecha' => $item->fecha,
            ];
        }
        return $response;

    }

    public static function contarHistorias(){
        $total = self::select('*')->count();
        if($total == 0){
            $total++;
        }
        return self::numPaginas($total);
    }
}
