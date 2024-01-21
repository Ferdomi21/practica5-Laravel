<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TrainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('train_types')->insert([
            [
                'type' => 'Cercanias'
            ],
            [
                'type' => 'Media distancia'
            ],
            [
                'type' => 'Alta Velocidad'
            ]
        ]);
    }
}
