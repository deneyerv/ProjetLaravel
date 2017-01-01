<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\montagne1.jpg',
            'title' => 'Montagne',
            'description' => 'La montagne is',
            'price' => 150
            
            
        ]);

        $product->save();
    }
}
