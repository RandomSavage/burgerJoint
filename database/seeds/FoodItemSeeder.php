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
          'category_id' => 2,
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
          'category_id' => 2,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_items')->insert([
          'title' => 'Vegan Burger',
          'description' => 'Plant-based meat substitiute paddy, lettuce, onion, pickle',
          'image_url' => 'img/burgers.png',
          'price' => 12.99,
          'category_id' => 2,
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Mild, Hot, Firetruck',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 20.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Steak and Baby Ribs',
            'description' => 'High Blood Pressure and Gout, Here We come',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 26.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cesar Salad',
            'description' => 'Italian Dressing On Some Iceburg lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 12.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tres Leche Cup Cakes',
            'description' => 'Delicious',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'Still Flavoured with Coca Leaves from Medicinal Cocaine?',
            'image_url' => '/img/beverages.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Refreshing Lemon and Lime',
            'image_url' => '/img/beverages.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Guiness',
            'description' => 'Good Beer',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.99,
            'category_id' => 7,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greygoose Shot',
            'description' => 'Blackout Medicine',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hennesy Shot',
            'description' => 'Vomit Inducing Shot',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
