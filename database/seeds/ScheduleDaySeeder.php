<?php

use Illuminate\Database\Seeder;
use App\ScheduleDay;

class ScheduleDaySeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i < 50; $i++){
        	for($j = 1; $j < 8; $j++){
        		for($k = 1; $k < 4; $k++){
        			ScheduleDay::insert([
	        			'schedule_id' => ($i-1)*7+$j,
		                'day' => rand(1, 6)
		            ]); 
        		}
        	}           
        } 
    }
}
