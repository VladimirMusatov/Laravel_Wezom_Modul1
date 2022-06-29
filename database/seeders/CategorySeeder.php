<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title'=>'Спорт',
            'slug'=>'Sport',
            ]);

        DB::table('categories')->insert([
            'title'=>'Книги',
            'slug'=>'Books',
            ]);

        DB::table('categories')->insert([
            'title'=>'Игры',
            'slug'=>'Games',
            ]);
    }
}
