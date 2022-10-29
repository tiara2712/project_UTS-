<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Barang::create([
            'namaBarang' => 'PinkFlash Matte Foundation 6 colors',
            'harga' => '39.900',
            'stok' => 145,
            'ulasan' => '⚡PINKFLASH foundation #OhMySelf riasan tipis dan tahan lama, 100% baru!



            Saya dapat membantu setiap Gadis PINKFLASH untuk memiliki kulit sempurna dan membuat riasan dasar paling alami dengan mudah.
            
            Efek riasannya alami dan bertahan selama 24 jam, yang merupakan keuntungan terbesar saya. Sangat cocok untuk setiap gadis yang ingin menciptakan tampilan riasan “No Makeup”.
            
            Tingkat koverasi tinggi adalah kekuatan super terbesar yang saya miliki, yang dapat membantu gadis PINKFLASH dengan mudah menutupi noda seperti jerawat, pori-pori, dan garis merah pada Wajah.
            
            Menggunakan komposisi  khusus untuk hasil akhir matte ekstrim dan super Oil Kontrol , biarkan riasan Anda terlihat bahkan di malam hari lebih baik.
            
            Riasan tipis dan tahan lama, matte dan tahan air, sangat ulet dan cakupan tinggi, saya dapat menghadirkan pengalaman paling nyaman ke wajah Anda. Datang dan bergabunglah denganku untuk melakukan "gadis licik".',
            'photo' => 'foundi.jpg'
        ]);

        Barang::create([
            'namaBarang' => 'PinkFlash Palette Eyeshadow',
            'harga' => '59.900',
            'stok' => 115,
            'ulasan' => '⚡PINKFLASH #OhMyLove 100% new rich color but "zero waste color" multiple face palette.



            Practical face palette, contains the eyeshadow, the blush, the contouring and the highlight, one palette has multi-purpose, convenient and efficient.
            
            Velvety-soft powder that feels lightweight does not hurt the skin and easy to blend, the high pigment allows you to have rich colors with a simple sweep.
            
            There are 10 colors in one palette, a variety of colors, a variety of collocations, zero waste color formula, let you have a different makeup every day.
            
            
            
            ❤3 SHAPES:
            
            #1 Mandarin Latte
            
            #2 Strawberry Ice  『Kebanyakan orang memilih』
            
            #3 Caramel Toffee ',
            'photo' => 'palette.jpg'
        ]);

        Barang::create([
            'namaBarang' => 'PinkFlash ombrelips Liquid Matte lipstik Velvet Tint',
            'harga' => '29.900',
            'stok' => 245,
            'ulasan' => '🌈PINKFLASH #DoubleSense Series 2 In 1 dual-ended lipstick is grandly launched! Brand new dual-ended design, more shades and more texture, satisfied with your variety of makeup finish. Follow your heart and match your sense!



            💟#DoubleSense Series featuring 3 types of lipstick:
            
            【2 In 1 Liquid Matte Lipstick】Both ends are liquid matte textures with different colors, providing an ultra-matte finish. High pigment, anti-transfer, non-stick cup, crackproof, waterproof and lasting.
            
            【2 In 1 Misty Velvet Lip Tint】Both ends are soft velvet textures with different colors, providing a misty velvet-matte finish. High pigment, Lightweight, comfortable to wear, waterproof and long-lasting.
            
            【2 In 1 Double Effect Matte Lipstick】One end is liquid matte texture, and the other end is soft velvet texture. It provides ultra matte finish and misty velvet-matte finish at the same time, easy to deal with makeup effect for various occasions.
            
            
            
            💞Color:
            
            🔥2 In 1 Liquid Matte Lipstick 
            
            #M01 #M02 #M03
            
            
            
            🔥2 In 1 Misty Velvet Lip Tint 
            
            #V01 #V02 #V03 #V04
            
            #V05 #V06 #V07 
            
            
            
            🔥2 In 1 Double Effect Matte Lipstick 
            
            #D01 #D02 
            
            
            
            💛2 In 1 Liquid Matte Lipstick 
            
            Dual-ended design, two shades 
            
            Liquid matte texture 
            
            ultra matte finish 
            
            Smooth texture 
            
            Anti-transfer 
            
            Waterproof 
            
            Non-stick cup 
            
            High pigment 
            
            Lightweight 
            
            Long-lasting 
            
            Non-clumping ',
            'photo' => 'lipstik.jpg'
        ]);
    }
}
