<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 50; $i++){
			Location::insert([
			    'user_id' => $i,
			    'lat' => 7.132185 + .001 * $i,
			    'lng' => -73.124790 - .001 * $i,
			    'work_at_loc' => true,
			    'travel_to_work' => false,
			    'max_distance' => 0
			]); 
        }
    }
}
