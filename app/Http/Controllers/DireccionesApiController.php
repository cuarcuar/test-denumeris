<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DireccionesApiController extends Controller
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

        switch ($request['tipoGasolina']) {
            case 'regularAscendente':
                $direcciones = Direccion::orderBy('regular')->get();
                break;

            case 'regularDescendente':
                $direcciones = Direccion::orderBy('regular', 'desc')->get();
                break;

            case 'premiumAscendente':
                $direcciones = Direccion::orderBy('premium')->get();
                break;

            case 'premiumDescendente':
                $direcciones = Direccion::orderBy('premium', 'desc')->get();
                break;
        }

        return response()->json($direcciones);
    }
}
