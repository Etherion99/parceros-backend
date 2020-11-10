<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    public function getAll(){
    	return response()->json(Phone::all());
    }
}
