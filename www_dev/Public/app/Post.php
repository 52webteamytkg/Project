<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment(){
        return $this->hasMany('App\commments');
    }


    public function post(){
        return $this->belongsToMany('App\category');
    }
}
