<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DislikeController extends Controller
{
    public function dislike($post_id)
    {
        // idを元にPostデータ１件取得
        $post = Post::where('id', $post_id)->with('dislikes')->first();

        dd($post);

        // likesテーブルに選択されているdiaryとログインしているユーザーのidをINSERTする
        $post->likes()->attach(Auth::user()->id);
        // INSERT INTO likes (diary_id, user_id) VALUES ($diary->id, Auth::user->id)

        return redirect()->route('mazuimeshi.index');
    }


    public function cancel_dislike($post_id)
    {
        $diary = Diary::where('id', $id)->with('likes')->first();
        // SELECT * FROM diaries JOIN likes
        // Modelを作ってないのでdelete()ではダメ！→間接的にlikesテーブルを引っ張ってきているため...

        $diary->likes()->detach(Auth::user()->id);
        // DELET FROM likes WHERE diary_id = $diary->id AND user_id=>Auth::user()->id;
        return redirect()->route('diary.index');
    }

}
