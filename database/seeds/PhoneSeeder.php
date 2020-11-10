<?php

use Illuminate\Database\Seeder;
use App\Phone;

class PhoneSeeder extends Seeder
{
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for($i = 1; $i < 50; $i++){
    		Phone::insert([
	        	'indicative' => '+57',
	        	'number' => '31'.$faker->regexify('[0-9]{8}'),
	        	'user_id' => $i
	        ]);
    	}

    	Phone::find(8)->update(['number' => '3104778865']);     
    }
}
