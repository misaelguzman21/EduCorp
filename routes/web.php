<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RegistrarEventoController;
use App\Http\Controllers\RegistrarParticipanteController;

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
    return view('index');

});

Route::get('/crearevento',[RegistrarEventoController::class,'create'] )->name('evento.create'); //function () {
Route::post('/guardarevento',[RegistrarEventoController::class,'store'])->name('evento.store');
Route::get('/listar',[RegistrarEventoController::class,'index'] )->name('evento.index');
Route::get('{evento}/editarevento',[RegistrarEventoController::class,'edit'] )->name('evento.edit');
Route::put('{evento}/actualizar', [RegistrarEventoController::class,'update'] )->name('evento.update');
Route::get('{evento}/ver',[RegistrarEventoController::class,'show'] )->name('evento.show');
Route::delete('{evento}/eliminar',[RegistrarEventoController::class,'destroy'] )->name('evento.destroy');
    //return view('crearevento');





Route::get('/crearparticipante', function () {
    return view('crearparticipante');
});

//Listado de eventos

//Editar de eventos

//Eliminar eventos

Route::resource('participants', RegistrarParticipanteController::class);
//Prefijo de participantes

//Eliminar de particioantes