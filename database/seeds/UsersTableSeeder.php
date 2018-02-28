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

      // Sample demo data 1
      DB::table('users')->insert([
          'username' => 'admin',
          'nama' => 'Amirol',
          'email' => 'contact@amirolzolkifli.com',
          'password' => bcrypt('admin'),
          'telefon' => '0123456789'
      ]);

      // Sample demo data 2
      DB::table('users')->insert([
          'username' => 'demouser',
          'nama' => 'Ali Baba',
          'email' => 'ali@baba.com',
          'password' => bcrypt('demouser'),
          'telefon' => '0123456789'
      ]);


    }
}
