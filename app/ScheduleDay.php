<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleDay extends Model
{
    protected $fillable = [
    	'day',
    	'schedule_id'
    ];

    public function schedule(){
    	return $this->belongsTo('App\Schedule');
    }
}
