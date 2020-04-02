<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      DB::table('food_categories')->insert([
          'title' => 'Starters',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/starters.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Burgers',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/burgers.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Entrees',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/dippers.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Sides',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/sides.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Deserts',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/deserts.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Drinks',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => '/img/beverages.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Beers',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/beers.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);

      DB::table('food_categories')->insert([
          'title' => 'Alcohol',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'image_url' => 'img/drinks.png',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);
    }
}
