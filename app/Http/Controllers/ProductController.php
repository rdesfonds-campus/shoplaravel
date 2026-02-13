<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index()
{
    $products = Product::with('category')->get();

    return view('products.index', compact('products'));
}


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'price', 'stock']);
        $data['active'] = $request->boolean('active');

        // 1) slug obligatoire + unique (sinon erreur SQL)
        $slug = Str::slug($data['name']);
        if (Product::where('slug', $slug)->exists()) {
            $slug .= '-' . Str::lower(Str::random(4));
        }
        $data['slug'] = $slug;

        // 2) category_id obligatoire (sinon erreur SQL)
        $categoryId = Category::query()->value('id'); // 1ère catégorie
        if ($categoryId === null) {
            return back()
                ->with('error', 'Crée d’abord une catégorie, puis réessaie.')
                ->withInput();
        }
        $data['category_id'] = $categoryId;


        Product::create($data);

        return redirect()->route('products.index')
            ->with('success', 'Produit créé avec succès !');
    }

    // Les routes resource existent, donc on laisse des méthodes “placeholder”
    public function show(Product $product)
    {
        abort(404);
    }
    public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

    public function update(Request $request, Product $product)
{
    $data = $request->only(['name', 'description', 'price', 'stock']);
    $data['active'] = $request->boolean('active');

    $product->update($data);

    return redirect()->route('products.index')
        ->with('success', 'Produit mis à jour avec succès !');
}

    public function destroy(Product $product)
    {
        abort(404);
    }
}
