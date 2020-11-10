<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
    	'indicative',
    	'number',
    	'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
