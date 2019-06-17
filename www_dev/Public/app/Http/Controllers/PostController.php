<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


      public function store(Request $request)
    {

        $post =   new Post();//インスタンス化
        $post->title = $request->title;
        $post->img_url = $request->img_url->store('public/posts_img');
        $post->caption = $request->caption;
        $post->category_id = 1;
        $post->user_id = Auth::user()->id;

        $post->save();

        //一覧ページに戻る（リダイレクト処理）
        return redirect()->route('mazuimeshi.index');
    }
}
