<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CreateComment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
   //  public function  index(){


   //     $comments = Comment::orderBy('id', 'desc')->get();

   //     dd(id);
    
   //     return view('mazuimeshi. detail', ['commments' => $comments ]);
   //  }

       public function create() {

         return view('mazuimesi.detil');
    
    }

    public function store(Request $request){
 
         $comment = new Comment();//インスタンス化
         // $comment->title = $request->title;
         $comment->user_id = Auth::user()->id;
         $comment->content = $request->content;
         // $comment->post_id = Auth::user()->posts()[0]->id;
         // $comment->post_id = $request->post_id;
         $comment->post_id = 1;
         
         
       
        
         $comment->save();
 
         //detailページに戻る（リダイレクト処理）
         return redirect()->route('mazuimeshi.detail');
 
 
     }
}
