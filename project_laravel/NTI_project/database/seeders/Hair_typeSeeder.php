<?php

namespace Database\Seeders;

use App\Models\Hair_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hair_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hair_type::insert([

            ['name' => 'Curly Hair'],
            ['name' => 'Straight Hair'],
            ['name' => 'Wavy Hair'],
            ['name' => 'Dry Hair'],
            ['name' => 'Oily Hair'],
            ['name' => 'Normal Hair'],

        ]);
    }
}
