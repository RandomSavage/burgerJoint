<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      $faker = Faker::create();
      foreach(range(1,10) as $index) {
        DB::table('members')->insert([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'email' => $faker->email,
            'phone_number' => $faker->phoneNumber,
            'updated_at' =>  $faker->dateTimeThisMonth('now', 'America/New_York'),
            'created_at' =>  $faker->dateTimeThisMonth('now', 'America/New_York')
        ]);
      }
    }
}

// To represent date and time as now or when a new member is created use :
// Carbon::now()
