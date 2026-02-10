<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Ne pas oublier d'importer le modèle !

class CategoryController extends Controller
{
    public function store()
    {
        // On utilise l'outil create() pour ajouter une catégorie
        // Cela fonctionne car on a configuré le $fillable dans le modèle
        Category::create([
            'name' => 'Pièges Spéciaux',
            'description' => 'Pour les fantômes de classe 5'
        ]);

        return "La catégorie a été créée avec succès !";
    }
}