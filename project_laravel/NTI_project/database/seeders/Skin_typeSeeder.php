<?php

namespace Database\Seeders;

use App\Models\Skin_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Skin_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skin_type::insert([

            ['name' => 'Dry Skin'],

            ['name' => 'Oily Skin'],

            ['name' => 'Combination Skin'],

            ['name' => 'Sensitive Skin'],

            ['name' => 'Normal Skin'],

        ]);
    }
}
