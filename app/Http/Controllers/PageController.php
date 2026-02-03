<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function welcome() {
    $url = route('product.show', ['id' => 5]);
    return "L'URL du produit 5 est : " . $url;
}


public function about()
{
    return "Ceci est la description de ma boutique Laravel !"; 
}}