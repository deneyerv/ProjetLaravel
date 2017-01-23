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
            'imagePath' => '\laravel5\public\css\Pictures\nes.jpg',
            'title' => 'NES',
            'description' => 'Console Nes',
            'price' => 150,
            'category' =>'NES'
        ]);$product->save();

            $product1 =new \App\Product([
                'imagePath' => '\laravel5\public\css\Pictures\snes.jpg',
                'title' => 'SNES',
                'description' => 'La montagne is',
                'price' => 200,
                'category' =>'SNES'
            
        ]);$product1->save();

        $product2 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\n64.jpg',
            'title' => 'N64',
            'description' => 'Console N64',
            'price' => 40,
            'category' =>'N64' ]);$product2->save();

            $product3 =new \App\Product([
                'imagePath' => '\laravel5\public\css\Pictures\gamecube.jpg',
                'title' => 'GAMECUBE',
                'description' => 'CONSOLE GAMECUBE',
                'price' => 30,
                'category' =>'GAMECUBE'  ]);$product3->save();

        $product4 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\SMB1.jpg',
            'title' => 'Jeu Super Mario Bros ',
            'description' => 'Jeu Super Mario Bros sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product4->save();

        $product5 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\SMB2.jpg',
            'title' => 'Jeu Super Mario Bros 2 ',
            'description' => 'Jeu Super Mario Bros 2 sur nes',
            'price' => 20,
            'category' =>'NES'  ]);$product5->save();

        $product6 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\SMB3.jpg',
            'title' => 'Jeu Super Mario Bros 3 ',
            'description' => 'Jeu Super Mario Bros 3 sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product6->save();

        $product7 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\snes2.jpg',
            'title' => 'Zelda  link to the past',
            'description' => 'Jeu Zelda  link to the past',
            'price' => 30,
            'category' =>'SNES'

        ]);$product7->save();

        $product8 =new \App\Product([
        'imagePath' => '\laravel5\public\css\Pictures\snes3.jpg',
        'title' => 'Donkey Kong Country',
        'description' => 'Jeu Donkey Kong Country',
        'price' => 25,
        'category' =>'SNES'

    ]);$product8->save();

        $product9 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\snes4.jpg',
            'title' => 'Dragons Lair',
            'description' => 'Jeu Dragons Lair',
            'price' => 15,
            'category' =>'SNES'

        ]);$product9->save();

        $product10 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\N641.jpg',
            'title' => 'Zelda ocarina of time',
            'description' => 'Jeu Zelda ocarina of time',
            'price' => 15,
            'category' =>'N64'

        ]);$product10->save();

        $product10 =new \App\Product([
            'imagePath' => '\laravel5\public\css\Pictures\Gamecube1.jpg',
            'title' => 'Zelda Windwaker',
            'description' => 'Jeu Zelda Windwaker',
            'price' => 20,
            'category' =>'GAMECUBE'

        ]);$product10->save();


    }
}
