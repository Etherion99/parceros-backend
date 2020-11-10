<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i < 50; $i++){
        	for($j = 1; $j < 8; $j++){
        		$start_hour = rand(1, 10);

        		Schedule::insert([
        			'user_id' => $i,
	                'start_hour' => $start_hour,
	                'end_hour' => $start_hour+rand(1, 3)
	            ]); 
        	}           
        } 
    }
}
