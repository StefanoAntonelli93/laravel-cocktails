<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;
use Faker\Generator as Faker;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            // creo record casuali con Faker
            $cocktail = new Cocktail();

            $cocktail->Ingredienti = $faker->company();
            $cocktail->Istruzioni = $faker->city();
            $cocktail->Categoria = $faker->city();
            $cocktail->Decorazione = $faker->time();
            $cocktail->Origine = $faker->time();


            $cocktail->save();
        }
    }
}
