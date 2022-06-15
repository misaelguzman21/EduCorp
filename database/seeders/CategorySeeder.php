<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['id'=>1, 'nombre'=>'Evento corporativo' ],
            ['id'=>2, 'nombre'=>'Evento con causa'],
            ['id'=>3, 'nombre'=>'Evento deportivo'],
            ['id'=>4, 'nombre'=>'Evento social'],
            ['id'=>5, 'nombre'=>'Convención'],
        ]);
    }
}
