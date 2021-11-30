<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Programas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programas')->insert([
		'nombre' => 'Comisión Nacional para el desarrollo de los pueblos indígenas',
		'id_institucion' => 1,
		]);
		DB::table('programas')->insert([
		'nombre' => 'Date Cuenta',
		'id_institucion' => 1,
		]);
		DB::table('programas')->insert([
		'nombre' => 'Programa de apoyo a las instancias de las mujeres en las entidades federativas',
		'id_institucion' => 1,
		]);
		DB::table('programas')->insert([
		'nombre' => 'Ayuda Terapéutica y educación ambiental con mujeres',
		'id_institucion' => 3,
		]);
		DB::table('programas')->insert([
		'nombre' => 'Línea de ayuda',
		'id_institucion' => 4,
		]);
		DB::table('programas')->insert([
		'nombre' => 'Centro de apoyo a la mujer',
		'id_institucion' => 4,
		]);
    }
}
