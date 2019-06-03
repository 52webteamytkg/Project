<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//↑require_once(別ファイル);のイケてる版
// use App\Diary;
// use App\Http\Requests\CreateDiary;
// use Illuminate\Support\Facades\Auth;

class MaMeController extends Controller
{
     public function index() {
        	//モデルファイル使ってデータを取得する
     			// $diaries = Diary::with('dislikes')->orderBy('id','desc')->get();

     			return view('mazuies.index');
	     		//view関数はresourses/views/内にあるファイルを取得する関数
	     		//view('ファイル名')もしくは
	     		//view('フォルダ名.ファイル名')にように記述する
	     		//例）view('welcome')
	     		//例）view('diaries.edit')
	     		//*ファイル名は.bladeの前のみ
	               //view(③,[② => ①]);
	               //①の変数を、②の変数名に変えて③のviewへ送る。
     }

     function mypage() {
          $login_user = Auth::user();
          $mazuies = $login_user->mazuies;
          // dd($diaries);
          return view('mazuies.mypage', ['mazuies' => $mazuies]);
     }
 }