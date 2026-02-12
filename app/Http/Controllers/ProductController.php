<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'T-shirt Laravel', 'price' => 29.99],
            ['id' => 2, 'name' => 'Mug PHP', 'price' => 12.50],
            ['id' => 3, 'name' => 'Sticker Blade', 'price' => 3.00],
            ['id' => 4, 'name' => 'Hoodie Framework', 'price' => 59.00],
            ['id' => 5, 'name' => 'Casquette Dev', 'price' => 19.90],
        ];

        return view('products.index', ['products' => $products]);
    }

    // Exemple si tu ajoutes une page produit plus tard :
    // public function show(Product $product)
    // {
    //     return view('products.show', compact('product'));
    // }
}
