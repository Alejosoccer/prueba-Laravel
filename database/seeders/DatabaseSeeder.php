<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Configuracion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Configuracion::factory()->create([
            'idioma' => 'Español',
            'pais' => 'Ecuador',
            'estado' => 'Quito'
        ]);

        Configuracion::factory()->create([
            'idioma' => 'Ingles',
            'pais' => 'Inglaterra',
            'estado' => 'Londres'
        ]);

        Configuracion::factory()->create([
            'idioma' => 'Alemán',
            'pais' => 'Alemania',
            'estado' => 'Berlín'
        ]);

        Configuracion::factory()->create([
            'idioma' => 'Portugues',
            'pais' => 'Brasil',
            'estado' => 'Río de Janeiro'
        ]);
         


        // \App\Models\User::factory(10)->create();
    }
}
