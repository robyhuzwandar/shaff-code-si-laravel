<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'cover', 'user_id', 'category_id'];
    protected $table = 'posts';

    public function category()
    {
    	return $this->hasMany('App\Category');
    }

    public function user()
    {
    	return $this->hasMany('App\User');
    }
}

