<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
      protected $fillable = [
        'name', 'description'
    ];

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
