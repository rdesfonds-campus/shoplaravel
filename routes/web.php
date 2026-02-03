<?php

use Illuminate\Support\Facades\Route;
// On dit à PHP où trouver le contrôleur AVANT de l'utiliser 
use App\Http\Controllers\PageController; 
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Hello Laravel';
});


// Maintenant PHP sait ce qu'est "PageController" [cite: 27]
Route::get('/welcome', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/produit/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/boutique/vêtements', [PageController::class, 'shop'])->name('shop');