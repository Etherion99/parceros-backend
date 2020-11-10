<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    	'name',
    	'email'
    ];

    public function phone(){
    	return $this->hasOne('App\Phone');
    }

    public function profile(){
    	return $this->hasOne('App\Profile');
    }

    public function schedules(){
        return $this->hasMany('App\Schedule');
    }

    public function location(){
        return $this->hasOne('App\Location');
    }

    public function services(){
        return $this->hasMany('App\Service');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
