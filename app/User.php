<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'address',
        'birtday',
        'phone',
        'about',
        'photo'
    ];

    public function community()
    {
        return $this->belongsTo('App\Community');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
   
    protected $hidden = [
        'password', 'remember_token',
    ];
}
