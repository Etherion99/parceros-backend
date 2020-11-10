<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
    	'rate',
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
