<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Sample demo produk 1
      DB::table('products')->insert([
          'nama' => 'Produk A',
          'kos' => 5.00,
          'margin' => 3.00,
          'active' => true
      ]);

      // Sample demo produk 2
      DB::table('products')->insert([
          'nama' => 'Produk B',
          'kos' => 10.00,
          'margin' => 20.00,
          'active' => true
      ]);
    }
}
