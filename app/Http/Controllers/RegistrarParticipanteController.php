<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarParticipanteController extends Controller
{

    private $participants = [
        ["id"=>1, "id_evento"=>2, "nombre" =>"Misael", "apellido_p"=> "Guzman", 
        "apellido_m"=>"Gutierrez", "empresa"=>"Dow", "edad"=>22,"estado"=>"Gto",
        "email"=>"misa@gmail.com", "telefono"=> 4451054390 ],
        ["id"=>2, "id_evento"=>2, "nombre" =>"Nick", "apellido_p"=> "Garcias", 
        "apellido_m"=>"Gutierrez", "empresa"=>"Tec", "edad"=>23,"estado"=>"Gto",
        "email"=>"patrick@gmail.com", "telefono"=> 4451105238 ],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("participants.index", ["participants" => $this->participants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $participant = null;

        foreach($this->participants as $p){
            if ($p["id"] === intval($id)){
                $participant = $p;
            }

        }

        if(!empty($participant)){
            return view("participants.edit", ["participant" => $participant]);
        }else{
            return view("error", ["message"=> "No se encontró el participante XD"]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
