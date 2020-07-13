<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }


}
