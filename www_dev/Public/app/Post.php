<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment(){
        return $this->belongsToMany('App\commment');
    }


    public function post(){
        return $this->belongsToMany('App\category');
    }
}
