<?php

use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\DireccionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('direccion', DireccionController::class)->except('show');
Route::resource('busqueda', BusquedaController::class);
