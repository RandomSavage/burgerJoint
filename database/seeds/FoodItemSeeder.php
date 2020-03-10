<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      DB::table('food_items')->insert([
          'title' => 'Billy Burger',
          'description' => 'Fresh Ground Sirloin, Lettuce, Billy Sauce',
          'image_url' => 'img/burgers.png',
          'price' => 9.99,
          'category_id' => 1,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_items')->insert([
          'title' => 'Texas Burger',
          'description' => 'Fresh Ground Sirloin Smothered in our Special BBQ Sauce, mushrooms and onions',
          'image_url' => 'img/burgers.png',
          'price' => 9.99,
          'category_id' => 2,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_items')->insert([
          'title' => 'Spicy Burger',
          'description' => 'Fresh Ground Sirloin, jalepenos, lettuce, Southwest Sauce',
          'image_url' => 'img/burgers.png',
          'price' => 9.99,
          'category_id' => 3,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_items')->insert([
          'title' => 'Vegan Burger',
          'description' => 'Plant-based meat substitiute paddy, lettuce, onion, pickle',
          'image_url' => 'img/burgers.png',
          'price' => 12.99,
          'category_id' => 4,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

    }
}
