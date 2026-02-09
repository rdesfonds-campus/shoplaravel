<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('products')->insert([
        [
            'name' => 'Pack de Protons Classique',
            'slug' => 'pack-protons-classique',
            'description' => 'Accélérateur de particules nucléaires portable. Ne pas croiser les effluves !',
            'image' => 'proton-pack.jpg',
            'price' => 2500.00,
            'category_id' => 1,
        ],
        [
            'name' => 'Piège à fantômes Deluxe',
            'slug' => 'piege-fantomes-deluxe',
            'description' => 'Indispensable pour capturer les entités une fois affaiblies. Pédale incluse.',
            'image' => 'ghost-trap.jpg',
            'price' => 500.00,
            'category_id' => 3, // <--- Ici, on vise la catégorie "Pièges à fantômes"
        ]
    ]);
}
}