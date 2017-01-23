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
            'imagePath' => 'http://www.argusjeux.fr/medias/nes-e55805.jpg',
            'title' => 'NES',
            'description' => 'Console Nes',
            'price' => 150,
            'category' =>'NES'
        ]);$product->save();

        $product1 =new \App\Product([
                'imagePath' => 'http://i2.cdscdn.com/pdt2/5/2/8/1/700x700/nin3561292168528/rw/console-super-nintendo.jpg',
                'title' => 'SNES',
                'description' => 'Console Snes',
                'price' => 200,
                'category' =>'SNES'
            
        ]);$product1->save();

        $product2 =new \App\Product([
            'imagePath' => 'https://pmcdn.priceminister.com/photo/Consoles-Nintendo-64-997164057_L.jpg',
            'title' => 'N64',
            'description' => 'Console N64',
            'price' => 40,
            'category' =>'N64' ]);$product2->save();

        $product3 =new \App\Product([
                'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/GameCube-Console-Set.png',
                'title' => 'GAMECUBE',
                'description' => 'CONSOLE GAMECUBE',
                'price' => 30,
                'category' =>'GAMECUBE'  ]);$product3->save();

        $product4 =new \App\Product([
            'imagePath' => 'http://www.mariowiki.com/images/d/d7/SMB_Boxart.PNG',
            'title' => 'Jeu Super Mario Bros ',
            'description' => 'Jeu Super Mario Bros sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product4->save();

        $product5 =new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/0/00/Super_Mario_Bros_2.jpg',
            'title' => 'Jeu Super Mario Bros 2 ',
            'description' => 'Jeu Super Mario Bros 2 sur nes',
            'price' => 20,
            'category' =>'NES'  ]);$product5->save();

        $product6 =new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/a/a5/Super_Mario_Bros._3_coverart.png',
            'title' => 'Jeu Super Mario Bros 3 ',
            'description' => 'Jeu Super Mario Bros 3 sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product6->save();

        $product7 =new \App\Product([
            'imagePath' => 'http://image.jeuxvideo.com/images/sn/l/o/lozpsn0f.jpg',
            'title' => 'Zelda  link to the past',
            'description' => 'Jeu Zelda  link to the past',
            'price' => 30,
            'category' =>'SNES'

        ]);$product7->save();

        $product8 =new \App\Product([
        'imagePath' => 'https://www.loveroms.com/assets/data/super-nintendo/donkey-kong-country-snes-cover-usa.jpg',
        'title' => 'Donkey Kong Country',
        'description' => 'Jeu Donkey Kong Country',
        'price' => 25,
        'category' =>'SNES'
         ]);$product8->save();

        $product9 =new \App\Product([
            'imagePath' => 'http://image.jeuxvideo.com/images/sn/d/r/drlasn0f.jpg',
            'title' => 'Dragons Lair',
            'description' => 'Jeu Dragons Lair',
            'price' => 15,
            'category' =>'SNES'
        ]);$product9->save();




    }
}
