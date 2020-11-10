<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reaction;
use App\Service;

class ReactionController extends Controller
{
    public function getByUser($id){
    	return response()->json(Reaction::where('user_id', $id)->get());
    }

    public function getByService($id){
    	return response()->json(Reaction::where('service_id', $id)->get());
    }

    public function create(Request $request){
    	$response = [
    		'code' => 200,
    		'message' => json_encode($request->all()),
    		'ok' => true
    	];

    	$data = $request->all();

    	unset($data['id']);

    	try{
    		$id = Reaction::insertGetId($data);
    		$response['message'] = $id;
    	}catch(\Illuminate\Database\QueryException $e){
    		$response['message'] = $e->getMessage();
		}

    	return response()->json($response);
    }

    public function update(Request $request){
    	$response = [
    		'code' => 200,
    		'message' => "",
    		'ok' => true
    	];

    	$reaction = Reaction::find($request->id);

    	$reaction->like = $request->like;
   		$reaction->save();

    	return response()->json($response);
    }

    public function delete($id){
    	$response = [
    		'code' => 200,
    		'message' => "",
    		'ok' => true
    	];

    	$reaction = Reaction::find($id);
    	$reaction->delete();

    	return response()->json($response);
    }
}
