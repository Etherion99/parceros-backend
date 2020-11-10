<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function getByUser($id){
    	return response()->json(Location::where('user_id', $id)->first());
    }
}
