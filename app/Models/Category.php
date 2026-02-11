<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // La ligne doit être ici, entre les deux accolades de la classe
    protected $fillable = ['name', 'description'];}