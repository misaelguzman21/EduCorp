<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class RegistrarEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::orderByDesc('id')->get();
        return view('index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearevento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate(
            [
            'nombre' => 'required',
            'siglas' => 'required',
            'descripcion' => 'required',
            'areas' => 'required',
            'capacidad' => 'required|numeric',
            'duracion' => 'required|numeric',
            'costo' => 'required|numeric',
            'localizacion' => 'required|',

            ]);
            $evento = Evento::create($datos);
            return redirect()->route('evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('showevento',['evento' => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('editevento',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $datos = $request->validate(
            [
            'nombre' => 'required',
            'siglas' => 'required',
            'descripcion' => 'required',
            'areas' => 'required',
            'capacidad' => 'required|numeric',
            'duracion' => 'required|numeric',
            'costo' => 'required|numeric',
            'localizacion' => 'required|',

            ]);
            
            $evento->update($datos);
            return redirect()->route('evento.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('evento.index');
    }
}