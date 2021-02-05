<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Configuracion as Config;

class Configuracion extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Config::factory()->create([
            'idioma' => 'Español',
            'pais' => 'Ecuador',
            'estado' => 'Quito'
        ]);

        Config::factory()->create([
            'idioma' => 'Ingles',
            'pais' => 'Inglaterra',
            'estado' => 'Londres'
        ]);

        Config::factory()->create([
            'idioma' => 'Alemán',
            'pais' => 'Alemania',
            'estado' => 'Berlín'
        ]);

        Config::factory()->create([
            'idioma' => 'Portugues',
            'pais' => 'Brasil',
            'estado' => 'Río de Janeiro'
        ]);
         

    }
}
