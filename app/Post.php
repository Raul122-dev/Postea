<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'image', 'content'
    ];

    //protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function comments()
    {
        return $this->embedsMany('App\Comment');
    }
}
