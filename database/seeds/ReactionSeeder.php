<?php

use Illuminate\Database\Seeder;
use App\Reaction;

class ReactionSeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i < 246; $i++){
            for($j = 9; $j < 12; $j++){
               Reaction::insert([
                    'like' => rand(0, 1),
                    'user_id' => $j,
                    'service_id' => $i
                ]); 
            }	          
        } 
    }
}
