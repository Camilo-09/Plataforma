<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'General',
            'description' => 'Cualquier persona dentro de la plataforma puede verla'
        ]);
        Area::create([
            'name' => 'Software',
            'description' => 'Para areas especializadas en la industria 4.0 o de innovacion'
        ]);
        Area::create([
            'name' => 'Marketing',
            'description' => 'Para areas especializadas en las ventas y venta de productos por intenet'
        ]);
        Area::create([
            'name' => 'Construccion',
            'description' => 'Para areas especializadas en la realizacion de estructuras y edificios'
        ]);
    }
}
