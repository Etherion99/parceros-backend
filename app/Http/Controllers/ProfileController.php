<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function show($id){

	}

    public function getPicture($id){
        return response()->file(storage_path().'/app/public/profiles/'.rand(1,8).'/profile.jpg');
    }
}
