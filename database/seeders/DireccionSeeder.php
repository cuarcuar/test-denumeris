<?php

namespace Database\Seeders;

use App\Models\Direccion;
use Illuminate\Database\Seeder;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Direccion::insert([
            'estado' => 'Mexico',
            'municipio' => 'Toluca',
            'direccion' => 'Privada progreso #110',
            'codigo_postal' => '50110',
            'longitud' => '12.12',
            'latitud' => '12.12',
            'regular' => '12.12',
            'premium' => '12.12',
            'diesel' => '12.12'
        ]);
    }
}
