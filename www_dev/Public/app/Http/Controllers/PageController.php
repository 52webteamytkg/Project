<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
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

    /************************************
     * detail.blade.php 画面表示メソッド
     ************************************/
    public function detail()
    {
        return view('mazuies.detail');
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
     * login.blade.php 画面表示メソッド
     ************************************/

    // public function login()
    // {
    //     return view('mazuies/login');
    // }

    /************************************
     * signup.blade.php 画面表示メソッド
     ************************************/
    public function signup()
    {
        return view('mazuies.signup');
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

}
