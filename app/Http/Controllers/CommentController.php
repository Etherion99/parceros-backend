<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function getByUserCreatedBy($id){
    	return response()->json(Comment::where('created_by_user_id', $id)->with('createdTo')->get());
    }

    public function getByUserCreatedTo($id){
    	return response()->json(Comment::where('created_to_user_id', $id)->with('createdBy')->get());
    }
}
