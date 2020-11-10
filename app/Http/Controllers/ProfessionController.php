<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profession;

class ProfessionController extends Controller
{
    public function all(){
    	return response()->json(Profession::select('id', 'name')->get());
    }
}
