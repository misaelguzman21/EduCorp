<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('participants')->insert([
            ["id"=>1, "nombre"=>"Misael", "apellido"=>"Guzmán Gutiérrez", "edad"=>22, "estado"=>"Guanajuato", "email"=>"misaa@gmail.com", "telefono"=>445105],
            ["id"=>2, "nombre"=>"Rodolfo", "apellido"=>"Renteria", "edad"=>22, "estado"=>"Guanajuato", "email"=>"rodolfiux@gmail.com", "telefono"=>442100], 
            ["id"=>3, "nombre"=>"Pierina", "apellido"=>"Alba", "edad"=>23, "estado"=>"Guanajuato", "email"=>"hola@gmail.com", "telefono"=>444105],                
        ]);
    }
}
