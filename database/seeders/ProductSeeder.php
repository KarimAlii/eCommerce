<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Shirt',
            'price' => 100,
            'category_id' => 1,
            'image'=>'https://i.pinimg.com/736x/25/b3/47/25b347ffc0eed3807b1d6935ac02f005.jpg',
        ],

    );
    DB::table('products')->insert([
        'name' => 'Shirt',
        'price' => 100,
        'category_id' => 1,
        'image'=>'https://i.pinimg.com/736x/25/b3/47/25b347ffc0eed3807b1d6935ac02f005.jpg',
    ],

);
DB::table('products')->insert([
    'name' => 'Shirt',
    'price' => 100,
    'category_id' => 1,
    'image'=>'https://i.pinimg.com/736x/25/b3/47/25b347ffc0eed3807b1d6935ac02f005.jpg',
],

);
DB::table('products')->insert([
    'name' => 'Shirt',
    'price' => 100,
    'category_id' => 1,
    'image'=>'https://i.pinimg.com/736x/25/b3/47/25b347ffc0eed3807b1d6935ac02f005.jpg',
],

);

DB::table('products')->insert([
    'name' => 'Skirt',
    'price' => 100,
    'category_id' => 2,
    'image'=>'https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=925&format=pjpg&exif=1&iptc=1',
],

);
DB::table('products')->insert([
'name' => 'Skirt',
'price' => 100,
'category_id' => 2,
'image'=>'https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=925&format=pjpg&exif=1&iptc=1',
],

);
DB::table('products')->insert([
'name' => 'Skirt',
'price' => 100,
'category_id' => 2,
'image'=>'https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=925&format=pjpg&exif=1&iptc=1',
],

);
DB::table('products')->insert([
    'name' => 'Skirt',
    'price' => 100,
    'category_id' => 2,
    'image'=>'https://burst.shopifycdn.com/photos/model-in-gold-fashion.jpg?width=925&format=pjpg&exif=1&iptc=1',
    ],

    );
DB::table('products')->insert([
    'name' => 'Earing',
    'price' => 100,
    'category_id' => 3,
    'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
],

);

DB::table('products')->insert([
'name' => 'Earing',
'price' => 100,
'category_id' => 3,
'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
],

);
DB::table('products')->insert([
'name' => 'Earing',
'price' => 100,
'category_id' => 3,
'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
],

);
DB::table('products')->insert([
    'name' => 'Earing',
    'price' => 100,
    'category_id' => 3,
    'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
    ],

    );

    }
}
