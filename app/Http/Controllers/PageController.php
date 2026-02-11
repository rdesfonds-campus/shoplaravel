<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $data = [
            'nom' => 'ShopLaravel',
            'nbProduits' => 12,
            'estOuvert' => true,
        ];

        return view('welcome', $data);
    }

    public function about() 
    {
        return view('about', [
            'responsable' => 'Romain',
            'categories' => ['Électronique', 'Vêtements', 'Maison'],
            'estOuvert' => false,
        ]);
    }
}
