<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    function edit($user_id){
        $user=User::find($user_id);
       

        return view('mazuies.edit',['user' => $user]);
    }
    function update($id, Request $request){
        $user= User::find($id); //一件データ取得

        $user->img_url = $request->img_url->store('public/posts_img'); //プロフィール画像の登録

        $user->comment = $request->comment;//ユーザーコメント内容

        $user->name = $request->name;//値上書き

        $user->email = $request->email;//値上書き

        $user->passsword = $request->password;//値上書き



        $user->save(); //保存

          return redirect()->route('mazuimeshi.edit');
    }
}
