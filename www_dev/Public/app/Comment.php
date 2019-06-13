<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
<<<<<<< HEAD
    
    
    
    
    
    protected $fillable = [
        'user_id',  
        'content',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
=======
    //
>>>>>>> master
}
