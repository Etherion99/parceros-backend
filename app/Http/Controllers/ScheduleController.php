<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function getByUser($id){
    	return response()->json(Schedule::where('user_id', $id)->with('days')->get());
    }
}
