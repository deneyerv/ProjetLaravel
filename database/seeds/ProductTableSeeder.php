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
            'imagePath' => 'https://cdn.easycash.fr/img/prod/0/0/1/9/0/8/7/4/3/src/NES.jpg',
            'title' => 'NES',
            'description' => 'Console Nes',
            'price' => 150,
            'category' =>'NES'
        ]);$product->save();

            $product1 =new \App\Product([
                'imagePath' => 'http://france.retrogaming.fr/files/2012/04/snes-pal.jpg',
                'title' => 'SNES',
                'description' => 'Console SNES',
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
                'imagePath' => 'http://www.journaldugamer.com/files/2012/05/gamecube.jpg',
                'title' => 'GAMECUBE',
                'description' => 'CONSOLE GAMECUBE',
                'price' => 30,
                'category' =>'GAMECUBE'  ]);$product3->save();

        $product4 =new \App\Product([
            'imagePath' => 'http://www.retrogameguide.com/images/box_art_and_carts/nes-super-mario-bros-cart.jpg',
            'title' => 'Jeu Super Mario Bros ',
            'description' => 'Jeu Super Mario Bros sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product4->save();

        $product5 =new \App\Product([
            'imagePath' => 'http://image.jeuxvideo.com/images/ns/s/p/spmbns0f.jpg',
            'title' => 'Jeu Super Mario Bros 2 ',
            'description' => 'Jeu Super Mario Bros 2 sur nes',
            'price' => 20,
            'category' =>'NES'  ]);$product5->save();

        $product6 =new \App\Product([
            'imagePath' => 'http://image.jeuxvideo.com/images/jaquettes/00006909/jaquette-super-mario-bros-3-nes-cover-avant-g-1361808224.jpg',
            'title' => 'Jeu Super Mario Bros 3 ',
            'description' => 'Jeu Super Mario Bros 3 sur nes',
            'price' => 15,
            'category' =>'NES'  ]);$product6->save();

        $product7 =new \App\Product([
            'imagePath' => 'http://www.vinjatvideogames.com/files/3419/products/8491663/legend_of_zelda_link_to_the_past_german_.jpg',
            'title' => 'Zelda  link to the past',
            'description' => 'Jeu Zelda  link to the past',
            'price' => 30,
            'category' =>'SNES'

        ]);$product7->save();

        $product8 =new \App\Product([
        'imagePath' => 'https://webshop.cashconverters.com.au/thumbnail/425x260/2261600-super-nintendo-donkey-kong-country-cartridge-0.jpg',
        'title' => 'Donkey Kong Country',
        'description' => 'Jeu Donkey Kong Country',
        'price' => 25,
        'category' =>'SNES'

    ]);$product8->save();

        $product9 =new \App\Product([
            'imagePath' => 'https://stopxwhispering.files.wordpress.com/2015/03/snes-dragons-lair.jpg?w=545',
            'title' => 'Dragons Lair',
            'description' => 'Jeu Dragons Lair',
            'price' => 15,
            'category' =>'SNES'

        ]);$product9->save();

        $product10 =new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/The_Legend_of_Zelda_Ocarina_of_Time_box_art.png',
            'title' => 'Zelda ocarina of time',
            'description' => 'Jeu Zelda ocarina of time',
            'price' => 15,
            'category' =>'N64'

        ]);$product10->save();

        $product10 =new \App\Product([
            'imagePath' => 'https://r.mprd.se/fup/up/66445-The_Legend_Of_Zelda_The_Wind_Waker-1.jpg',
            'title' => 'Zelda Windwaker',
            'description' => 'Jeu Zelda Windwaker',
            'price' => 20,
            'category' =>'GAMECUBE'

        ]);$product10->save();


    }
}
