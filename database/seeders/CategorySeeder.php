<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Packs de protons'],
            ['name' => 'Tenues'],
            ['name' => 'Pièges à fantômes'],
            ['name' => 'Détecteur'],
            ['name' => 'Goodies'],
        ]);
    }
}