<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
    	'lat',
    	'lng',
    	'work_at_loc',
    	'travel_to_work',
    	'max_distance',
    	'user_id'
    ];

    protected $casts = [
        'work_at_loc' => 'boolean',
        'travel_to_work' => 'boolean'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
