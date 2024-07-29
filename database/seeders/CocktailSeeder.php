<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $cocktail = new Cocktail();
            $cocktail->name = $faker->city();
            $cocktail->ingredients = $faker->text();
            $cocktail->origin = $faker->city();
            $cocktail->description = $faker->text();
            $cocktail->save();
        }
    }
}
