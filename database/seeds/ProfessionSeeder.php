<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
        $professions = array();

        array_push($professions, array("name" => "Ing Sistemas"));
        array_push($professions, array("name" => "Ing Petróleos"));
        array_push($professions, array("name" => "Ing Eléctrico"));
		array_push($professions, array("name" => "Arquitecto"));	
        array_push($professions, array("name" => "Abogado"));
        array_push($professions, array("name" => "Médico"));
        array_push($professions, array("name" => "Enfermero"));
        array_push($professions, array("name" => "Ing Civil"));
        array_push($professions, array("name" => "Ing Mecánico"));

        foreach ($professions as $profession) {
        	Profession::insert([
        		'name' => $profession['name']
        	]); 
        }
    }
}
