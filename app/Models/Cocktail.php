<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'origin',
        'ingredients',
    ];
    public function Ingredient()
    {
        return $this->belongsToMany('app\models\Ingredient');
    }
}
