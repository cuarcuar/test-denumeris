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
        Direccion::create([
            'estado' => 'Mexico',
            'municipio' => 'Toluca',
            'direccion' => 'Privada progreso #110',
            'codigo_postal' => '50110',
            'longitud' => '19.27318657896829',
            'latitud' => '-99.6881524608435',
            'regular' => '19.12',
            'premium' => '21.20',
            'diesel' => '20.10'
        ]);

        Direccion::create([
            'estado' => 'Mexico',
            'municipio' => 'Metepec',
            'direccion' => 'Avenida tecnologico #100',
            'codigo_postal' => '52149',
            'longitud' => '19.257595699864577',
            'latitud' => '-99.57773905903052',
            'regular' => '29.40',
            'premium' => '32',
            'diesel' => '30.00'
        ]);

        Direccion::create([
            'estado' => 'Mexico',
            'municipio' => 'Zinacantepec',
            'direccion' => 'Eduardo monroy cardenaz #2000',
            'codigo_postal' => '50110',
            'longitud' => '19.267267033620605',
            'latitud' => '-99.7057478455365',
            'regular' => '10.00',
            'premium' => '11.20',
            'diesel' => '9.0'
        ]);
    }
}
