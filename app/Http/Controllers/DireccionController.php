<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccion::all();
        return view('direcciones.index', compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccion = new Direccion();
        $ruta = 'store';
        return view('direcciones.form', compact('direccion', 'ruta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccion = Direccion::create($request->all());
        return redirect()->route('direccion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion)
    {
        $ruta = 'update';
        return view('direcciones.form', compact('direccion', 'ruta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccion)
    {
        $direccion->update($request->all());
        return redirect()->route('direccion.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();
        return redirect()->route('direccion.index');

    }
}
