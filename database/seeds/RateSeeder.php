<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RateSeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i < 50; $i++){
        	for($j = 1; $j <= 5; $j++){
        		Rate::insert([
	                'rate' => rand(1, 5),
	                'user_id' => $i,
	                'service_id' => $i*$j
	            ]);
        	}            
        }
    }
}
