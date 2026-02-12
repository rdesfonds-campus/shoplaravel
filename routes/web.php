<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

use App\Models\Category;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return 'Hello Laravel';
});

Route::get('/categories', function () {
    $categories = Category::all();

    return view('categories', ['categories' => $categories]);
});

Route::get('/categorie/{id}', function ($id) {
    $category = Category::findOrFail($id);

    $products = Product::where('category_id', $id)->get();

    return view('category_show', [
        'category' => $category,
        'products' => $products
    ]);
})->name('category.show');

Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/boutique/vêtements', [PageController::class, 'shop'])->name('shop');

/*
|--------------------------------------------------------------------------
| EXO 5 — CRUD Products (Resource)
|--------------------------------------------------------------------------
| Ces routes remplacent :
| - Route::get('/products', ...)
| - Route::get('/produit/{id}', ...)
*/
Route::resource('products', ProductController::class);
