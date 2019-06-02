<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // index.blade.php 画面表示メソッド
    public function index()
    {
        return view('mazuies/index');
    }

    // detail.blade.php 画面表示メソッド
    public function detail()
    {
        return view('mazuies/detail');
    }

    // login.blade.php 画面表示メソッド
    public function login()
    {
        return view('mazuies/login');
    }

    // signup.blade.php 画面表示メソッド
    public function signup()
    {
        return view('mazuies/signup');
    }
}
