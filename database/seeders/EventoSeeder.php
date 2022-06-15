<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('eventos')->insert([
            ["id"=>1, "nombre"=>"Tec Event", "siglas"=>"FE", "descripcion"=>"Evento escolar","areas"=>"Marketing", "capacidad"=>400,  "duracion"=>3, "costo"=>100, "localizacion"=>"Tec"],               
        ]);
    }
}
