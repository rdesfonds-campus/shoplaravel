<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
    // On ne renvoie plus de texte brut, on renvoie la VUE
    return view('welcome'); 
}

    // On garde uniquement celle-ci car elle contient toutes les données
    public function about() 
    {
        return view('about', [
    'responsable' => 'Romain',
    'categories' => ['Électronique', 'Vêtements', 'Maison'],
    'estOuvert' => false // Ajoute cette ligne
]);
    }
}