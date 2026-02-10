<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use App\Http\Controllers\ProductController;
use App\Models\Category;
// Importation du modèle Product pour l'exercice
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Hello Laravel';
});

// Route pour afficher toutes les catégories (Exercice précédent)
Route::get('/categories', function () {
    $categories = Category::all(); 
    return view('categories', ['categories' => $categories]);
});

// NOUVELLE ROUTE : Afficher les produits d'une catégorie Ghostbusters
Route::get('/categorie/{id}', function ($id) {
    // On récupère la catégorie demandée (Packs, Pièges, etc.) 
    $category = Category::findOrFail($id);
    
    // On récupère les produits liés à cette catégorie 
    $products = Product::where('category_id', $id)->get();

    return view('category_show', [
        'category' => $category,
        'products' => $products
    ]);
})->name('category.show');

Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/produit/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/boutique/vêtements', [PageController::class, 'shop'])->name('shop');
Route::get('/creer-test', function () {
    // On crée la catégorie d'un seul coup
    Category::create([
        'name' => 'Véhicules',
        'description' => 'Tout pour transporter les chasseurs de fantômes'
    ]);

    return "La catégorie Véhicules a été ajoutée au QG !";
});