<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Catalán Talgo',
                'passengers' => 150,
                'year' => 1987,
                'train_type_id' => 1
            ],
            [
                'name' => 'Renfe Trenhotel',
                'passengers' => 254,
                'year' => 1991,
                'train_type_id' => 2
            ]
            
        ]);
    }
}
