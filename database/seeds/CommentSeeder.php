<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 6; $i++){
            Comment::insert([
                'created_by_user_id' => $i,
                'created_to_user_id' => 8,
                'content' => $faker->regexify('([A-Z0-9]{8} ){20}')
            ]); 
        }
    }
}
