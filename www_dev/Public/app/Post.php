<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     //ホワイトリスト（セキュリティ）
    protected $fillable = [
        'title',
        'img_url',
        'caption',
    ];
    
    function  users(){                 
        return $this->hasmany('App\user');
    }
    
    
   
   
    // public function categories(){
    //     return $this->belongsToMany('App\category');  //categoryテーブル


}
