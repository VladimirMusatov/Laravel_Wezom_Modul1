<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 6; $i++)
        {

        $rand = rand(0, 1);
        $date = rand(10, 60);
        $view_count = rand(0, 77);
        
        DB::table('posts')->insert([
            'title' => 'title' . $i,
            'description'=>'description' . $i,
            'text' => 'text'. $i,
            'image' => 'image'. $i,
            'view_count' => $view_count,
            'status' => $rand,
            'created_at' => '2021-12-20 20:54:'. $date,
            'updated_at' => '2021-12-20 20:54:'. $date,
            ]);
        }
    }
}
