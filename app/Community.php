<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    //
     protected $fillable = [
        'id',
        'name',
        'type',
        'deskription',
        'location',
        'user_id',
        'contact',
        'logo'
    ];

    public function user()
    {
    	return $this->hasMany('App\User');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
