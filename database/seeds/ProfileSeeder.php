<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
    	$faker = Faker\Factory::create();

        for($i = 1; $i < 50; $i++){
           Profile::insert([
                'user_id' => $i,
                'profession_id' => rand(1, 9),
                'description' => $faker->regexify('([A-Z0-9]{8} ){20}'),
                'work_24_7' => rand(0, 1),
                'rest_break' => rand(1, 10),
                'cancellation' => rand(1, 10)
            ]); 
        }
    }
}
