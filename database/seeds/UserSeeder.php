<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
   	    $faker = Faker\Factory::create();

        for($i = 1; $i < 50; $i++){
           User::insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail
            ]); 
        }

        User::find(8)->update(['name' => 'sebastián', 'email' => 'juanstt99@gmail.com']); 	
    }
}
