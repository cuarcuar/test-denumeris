<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccion::all();
        return response()->json([
            "success" => "true",
            "results" => $direcciones
        ]);
    }

    public function direccionesOrdenadas(Request $request)
    {

        switch ($request['tipoGasolinaOrden']) {
            case 'regularAscendente':
                $direcciones = Direccion::orderBy('regular');
                break;

            case 'regularDescendente':
                $direcciones = Direccion::orderBy('regular', 'desc');
                break;

            case 'premiumAscendente':
                $direcciones = Direccion::orderBy('premium');
                break;

            case 'premiumDescendente':
                $direcciones = Direccion::orderBy('premium', 'desc');
                break;
        }

        if($request->has('estado')){
            $direcciones = $direcciones->where('estado', 'LIKE', '%'. $request['estado'] .'%');
        }

        if($request->has('municipio')){
            $direcciones = $direcciones->where('municipio', 'LIKE', '%'. $request['municipio'] .'%');
        }

        return response()->json($direcciones->get());
    }
}
