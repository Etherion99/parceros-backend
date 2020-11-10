<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function createdBy(){
    	return $this->belongsTo('App\User', 'created_by_user_id');
    }

    public function createdTo(){
    	return $this->belongsTo('App\User', 'created_to_user_id');
    }
}
