<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function dislike()
    {
        return $this->belongsToMany('App\User', 'dislikes')->withTimestamps();
    }


}
