<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      DB::table('members')->insert([
          'fname' => 'Jenny',
          'lname' => 'Jenny',
          'email' => 'billy@gmail.com',
          'phone_number' => '18756309',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);
    }
}
