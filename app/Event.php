<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
      protected $fillable = [
        'title',
        'sub_title',
        'event_type',
        'date',
        'time',
        'address',
        'location',
        'fee',
        'organizer',
        'poster',
        'body',
        'user_id',
        'community_id'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function community()
    {
        return $this->hasMany('App\Community');
    }

}