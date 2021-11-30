<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Instituciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('institucion')->insert([
		'nombre' => 'Instituto Queretarno de las Mujeres',
		'direccion' => 'Mariano Reyes #17 Colonia Centro',
		'cp' => '76000',
		'telefono' => '4422164757',
		'correo' => 'telmujeriqm@gmail.com',
		'id_estado' => 22,
		]);
		DB::table('institucion')->insert([
		'nombre' => 'Consejo Estatal de la Mujer',
		'direccion' => 'Circuito Interior Cerro de las Campanas s/n Colonia Centro Universitario',
		'cp' => '76020',
		'telefono' => '4422153404',
		'correo' => 'qro@inmujeres.gob.mx',
		'id_estado' => 22,
		]);
		DB::table('institucion')->insert([
		'nombre' => 'Centro de Atención a la Mujer y a la Familia, A.C,CAMFAC',
		'direccion' => 'Pedro de Gante 48, Colonia Cimatario',
		'cp' => '76030',
		'telefono' => '4424212329',
		'id_estado' => 22,
		]);
		DB::table('institucion')->insert([
		'nombre' => 'Proayuda a la Mujer Maltratada',
		'direccion' => 'Ezequiel Montes 80 Sur, Despacho 208. Colonia Centro',
		'cp' => '76000',
		'telefono' => '4422129431',
		'id_estado' => 22,
		]);
    }
}
