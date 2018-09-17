<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'username' => 'reguler',
        'password' => bcrypt('123456')
      ]);

      DB::table('users')->insert([
        'username' => 'premium',
        'status' => 'premium',
        'credit' => 40,
        'password' => bcrypt('123456')
      ]);
    }
}
