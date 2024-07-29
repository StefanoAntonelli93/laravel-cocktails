<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail_Ingredient extends Model
{
    use HasFactory;
    //istruisco laravel sulla tabella da usare
    protected $table = 'cocktails_ingredients';
}
