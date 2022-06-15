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


const PARTICIPANTS = [
    ["id"=>1, "id_evento"=>2, "nombre" =>"Misael", "apellido_p"=> "Guzman", 
    "apellido_m"=>"Gutierrez", "empresa"=>"Dow", "edad"=>22,"estado"=>"Gto",
    "email"=>"misa@gmail.com", "telefono"=> 4451054390 ],
    ["id"=>2, "id_evento"=>2, "nombre" =>"Nick", "apellido_p"=> "Garcias", 
    "apellido_m"=>"Gutierrez", "empresa"=>"Tec", "edad"=>23,"estado"=>"Gto",
    "email"=>"patrick@gmail.com", "telefono"=> 4451105238 ],
];

Route::get('/', function () {
    return view('index');

});

Route::get('/crearevento',[RegistrarEventoController::class,'create'] )->name('evento.create'); //function () {
Route::post('/guardarevento',[RegistrarEventoController::class,'store'])->name('evento.store');
Route::get('/listar',[RegistrarEventoController::class,'index'] )->name('evento.index');
Route::get('/editarevento',[RegistrarEventoController::class,'edit'] )->name('evento.edit');
    //return view('crearevento');





Route::get('/crearparticipante', function () {
    return view('crearparticipante');
});

//Listado de eventos

//Editar de eventos

//Eliminar eventos

//Prefijo de participantes
Route::prefix('participants')->group(function(){
    //Listado de participantes
    Route::get("/", [RegistrarParticipanteController::class, 'index']);

    //Editar de particioantes
    Route::get("/edit/{id}", [RegistrarParticipanteController::class, 'edit'])->whereNumber("id");


    //Procesar la edición
    Route::post("/edit/{id}", function(Request $request, $id){


    });

});

//Eliminar de particioantes