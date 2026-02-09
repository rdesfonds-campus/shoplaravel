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
    Schema::create('categories', function (Blueprint $table) {
       $table->id(); // 1. Le numéro d'identification
    $table->string('name'); // 2. Le nom de la catégorie
    $table->text('description')->nullable(); // 3. Le petit texte d'explication
    $table->timestamps(); // 4. Les horloges magiques
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
