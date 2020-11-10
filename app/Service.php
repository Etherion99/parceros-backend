<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    	'duration',
    	'cost',
    	'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function reactions(){
        return $this->hasMany('App\Reaction');
    }

    public function rates(){
        return $this->hasMany('App\Rate');
    }
}
