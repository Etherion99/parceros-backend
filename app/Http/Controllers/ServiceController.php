<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function getByUser($id){
    	return response()->json(Service::where('user_id', $id)->get());
    }

    public function getByUserWithReactions($user_service, $user_reaction){
    	return response()->json(Service::where('user_id', $user_service)->with(['reactions' => function($query) use($user_reaction){
    		$query->where('reactions.user_id', $user_reaction);
    	}])->get());
    }
}
