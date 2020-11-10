<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
    	'start_hour',
    	'end_hour',
    	'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function days(){
    	return $this->hasMany('App\ScheduleDay');
    }
}
