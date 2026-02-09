<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // Identifiant unique
        $table->string('name'); // Nom du produit
        $table->string('slug')->unique(); // Slug du produit
        $table->text('description')->nullable(); // Description (optionnelle)
        $table->decimal('price', 8, 2); // Prix (ex: 99.99)
        $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Clé étrangère vers la table "categories"
        $table->timestamps(); // Créé le "created_at" et "updated_at"
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
