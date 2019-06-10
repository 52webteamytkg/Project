<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;  

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();

        $posts = [
            [
                'title'     => 'Pizza',
                'caption'   => 'ブルーピザ',
                'photo'     => 'public/posts_img/1.png',
                'category'  => '1',
            ],
            [
                'title'     => 'Ice',
                'caption'   => 'ソフトクリーム',
                'photo'     => 'public/posts_img/2.png',
                'category'  => '1',
            ],
            [
                'title'     => 'ナチョス？？',
                'caption'   => 'ぶらぶらぶら。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。',
                'photo'     => 'public/posts_img/3.jpg',
                'category'  => '1',
            ]
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'title'       => $post['title'],
                'caption'     => $post['caption'],
                'photo'       => $post['photo'],
                'user_id'     => $user->id,
                'catrgory_id' => $post['category'],
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }

    }
}
