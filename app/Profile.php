<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'rest_break',
    	'work_24_7',
    	'cancellation',
    	'description',
    	'user_id',
    	'profession_id'
    ];

    protected $casts = [
        'work_24_7' => 'boolean',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function profession(){
    	return $this->belongsTo('App\Profession');
    }
}
