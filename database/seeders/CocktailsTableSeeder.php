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
        for ($i = 0; $i < 30; $i++) {
            // creo record casuali con Faker
            $cocktail = new Cocktail();
            $cocktail->Nome = $faker->company();
            $cocktail->Ingredienti = $faker->text();
            $cocktail->Istruzioni = $faker->paragraphs();
            $cocktail->Categoria = $faker->text();
            $cocktail->Decorazione = $faker->text();
            $cocktail->Origine = $faker->text();


            $cocktail->save();
        }
    }
}
