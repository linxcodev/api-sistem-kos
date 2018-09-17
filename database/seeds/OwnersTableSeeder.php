<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('owners')->insert([
        'username' => 'owner',
        'password' => bcrypt('123456')
      ]);

      DB::table('owners')->insert([
        'username' => 'owner2',
        'password' => bcrypt('123456')
      ]);
    }
}
