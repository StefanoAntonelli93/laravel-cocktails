<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\Cocktail_Ingredient;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_cocktail_ingredient = new Cocktail_Ingredient();
            $new_cocktail_ingredient->cocktail_id = Cocktail::inRandomOrder()->first()->id;
            $new_cocktail_ingredient->ingredient_id = Ingredient::inRandomOrder()->first()->id;
            $new_cocktail_ingredient->save();
        }
    }
}
