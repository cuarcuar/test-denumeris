<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoBusqueda = [
            '' => 'Seleccione una opción',
            'regularAscendente' => 'Gasolina regular, ascendente',
            'regularDescendente' => 'Gasolina regular, descendente',
            'premiumAscendente' => 'Gasolina premium, ascendente',
            'premiumDescendente' => 'Gasolina premium, descendente',
        ];
        return view('busquedas.index', compact('tipoBusqueda'));
    }

}
