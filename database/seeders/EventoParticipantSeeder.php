<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('eventos_participants')->insert([
            ['evento_id'=>1, 'participant_id'=> 1 ],
            ['evento_id'=>1, 'participant_id'=> 2 ],
            ['evento_id'=>1, 'participant_id'=> 3 ],
        ]);
    }
}
