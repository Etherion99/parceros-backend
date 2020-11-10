<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 50; $i++){
        	for($j = 1; $j <= 5; $j++){
        		Service::insert([
	                'name' => 'servicio '.($i * $j),
	                'description' => $faker->regexify('([A-Z0-9]{8} ){20}'),
	                'duration' => $j.':'.$i,
	                'cost' => ($i * 1e3 + $j * 1e2),
	                'user_id' => $i
	            ]);
        	}            
        } 
    }
}
