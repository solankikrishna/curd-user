<?php

use Illuminate\Database\Seeder;
use App\Cities;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cities Array
        $city = [
            ['name'=>'Ahmedabad'],
            ['name'=>'Surat'],
            ['name'=>'Vadodara'],
            ['name'=>'Rajkot'],
        ];
        Cities::insert($city);
    }
}
