<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hobbies = [
            ['name'=>'Art'],
            ['name'=>'Blogging'],
            ['name'=>'Chess'],
            ['name'=>'Dance'],
            ['name'=>'Flying'],
            ['name'=>'Graphic design'],
            ['name'=>'Hacking'],
            ['name'=>'Karate'],
            ['name'=>'Makeup'],
            ['name'=>'Painting'],
            ['name'=>'Scrapbooking'],
        ];
        \App\Hobbies::insert($hobbies);
    }
}
