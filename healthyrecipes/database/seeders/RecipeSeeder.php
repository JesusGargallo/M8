<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i =0; $i <4; $i++){
            Recipe::create([
                'title' => $faker->sentence(2),
                'description' => $faker->sentence(rand(12,18)),
                'image' => "https://i.blogs.es/a90b8b/pollo-yogur-arroz/840_560.jpg",
                'user_id' => $i+1,
                'prepTime' => "60",
                'category_id' => $i+1,
            ]);
        }

    }
}
