<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'firstname' => 'Krishna',
            'lastname' => 'Solanki',
            'email' => 'admin@gmail.com',
            'city_id'=>1,
            'gender'=>1,
            'password' => bcrypt('123456'),
        ]);
    }
}
