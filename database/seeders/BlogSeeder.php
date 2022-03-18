<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' =>1,

            'author' => 'Developement Team',
            'title' => 'Something Written Here',
            'desc' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odit eius ex, tenetur labore fugit temporibus, quos officiis expedita unde id sit sed neque. Modi illo quasi cupiditate ipsum quibusdam.
            ',
            'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
        ],

        );
        DB::table('posts')->insert([
            'user_id' =>2,

            'author' => 'Developement Team',

            'title' => 'Something Written Here',
            'desc' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odit eius ex, tenetur labore fugit temporibus, quos officiis expedita unde id sit sed neque. Modi illo quasi cupiditate ipsum quibusdam.
            ',
            'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
        ],

        );
        DB::table('posts')->insert([
            'user_id' =>3,
            'author' => 'Developement Team',
            'title' => 'Something Written Here',
            'desc' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, odit eius ex, tenetur labore fugit temporibus, quos officiis expedita unde id sit sed neque. Modi illo quasi cupiditate ipsum quibusdam.
            ',
            'image'=>'https://www.herstylecode.com/2021/02/what-to-wear-with-a-blazer-female-fashion-right-now-60211efdc741a.jpg',
        ],

        );

    }
}
