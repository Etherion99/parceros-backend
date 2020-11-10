<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = [
    	'like',
    	'user_id',
    	'service_id'
    ];

    protected $casts = [
        'like' => 'boolean',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function service(){
    	return $this->belongsTo('App\Service');
    }
}
