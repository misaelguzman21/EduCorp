<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->insert([
            ['id'=>1, 'nombre'=>'Contabilidad' ],
            ['id'=>2, 'nombre'=>'Direccion'],
            ['id'=>3, 'nombre'=>'Produccion'],
            ['id'=>4, 'nombre'=>'Marketing'],
            ['id'=>5, 'nombre'=>'Recursos Humanos'],
        ]);
    }
}
