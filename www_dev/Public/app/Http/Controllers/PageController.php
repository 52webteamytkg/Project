<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /************************************
     * index.blade.php 画面表示メソッド
     ************************************/
    public function index()
    {
        // 全件読み込み
        $posts = Post::all();
        return view('mazuies.index',['posts'=>$posts]);
    }

    public function ranking()
    {
        $posts = 0;
        // 今参照中の投稿データを引数でもらって、
        // dislike_postテーブルをSelect（Count）して
        // dislikeの多い順からソート（ORDER BY -> DESC）する
        return redirect()->route('mazuies.index',['posts'=>$posts]);
    }

    /************************************
     * detail.blade.php 画面表示メソッド
     ************************************/
    public function detail($post_id)
    {¥
        $post = Post::find($post_id);
        $coments = Comment::where('post_id',$post_id);
        // dd($post);
        return view('mazuies.detail',['post'=>$post]);
    }

    /************************************
     * about.blade.php 画面表示メソッド
     ************************************/
    public function about()
    {
        return view('mazuies.about');
    }

    /************************************
     * policy.blade.php 画面表示メソッド
     ************************************/
    public function policy()
    {
        return view('mazuies.policy');
    }

    /************************************
     * edit.blade.php 画面表示メソッド
     ************************************/
    public function edit()
    {
        return view('mazuies.edit');
    }

    /************************************
     * mypage.blade.php 画面表示メソッド
     ************************************/
    public function mypage()
    {
        $login_id = Auth::user()->id;
        return view('mazuies.mypage',['user_id'=>$login_id]);
    }

    /************************************
     * newpost.blade.php 画面表示メソッド
     ************************************/
    public function newpost()
    {
        return view('mazuies.newpost');
    }

}
