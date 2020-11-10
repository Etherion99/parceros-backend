<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;

class RateController extends Controller
{
    public function getByUser($id){
    	return response()->json(Rate::where('user_id', $id)->get());
    }

    public function getByService($id){
    	return response()->json(Rate::where('service_id', $id)->get());
    }
}
