<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    use HasFactory;

    public static function numPaginas($num){
    	if($num%10 == 0){
    		return "El número de páginas es: ".($num/10);
    	}else{
    		$num = $num/10;
    		$num = (int) $num;
    		$num++;
    		return 'El número de páginas es: '.$num;
    	}
    }
    public static function indiceDatos($num){
        $num = ($num*10)-9;
        return $num;
    }
}
