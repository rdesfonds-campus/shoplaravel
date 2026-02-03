<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $url = route('product.show', ['id' => 5]);
        return "L'URL du produit 5 est : " . $url;
    }

    // On garde uniquement celle-ci car elle contient toutes les données
    public function about() 
    {
        return view('about', [
            'responsable' => 'Romain',
            'categories' => ['Électronique', 'Vêtements', 'Maison']
        ]);
    }
}