<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
        	ProfessionSeeder::class,
        	UserSeeder::class,
        	ProfileSeeder::class,
        	ServiceSeeder::class,
        	ScheduleSeeder::class,
        	ScheduleDaySeeder::class,
            LocationSeeder::class,
            CommentSeeder::class,
            RateSeeder::class,
            ReactionSeeder::class,
            PhoneSeeder::class
        ]);
    }
}
