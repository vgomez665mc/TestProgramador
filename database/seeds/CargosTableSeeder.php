<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [ 'No definido','Administrados', 'Contador', 'Ingeniero', 'Tecnico'];

		foreach ($cargos as $cargo) {

			DB::table('cargos')->insert([
			   'nombre' => $cargo,			   
			]); 
	    }
	}
    
}
