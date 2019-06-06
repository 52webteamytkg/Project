<?php

use Illuminate\Database\Seeder;

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
                'img_path'  => '1.png',
                'category'  => '3',
            ],
            [
                'title'     => 'Ice',
                'caption'   => 'ソフトクリーム',
                'img_path'  => '2.png',
                'category'  => '2',
            ],
            [
                'title'     => 'ナチョス？？',
                'caption'   => 'ぶらぶらぶら。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。',
                'img_path'  => '3.jpg',
                'category'  => '3',
            ]
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'title'       => $post['title'],
                'caption'     => $post['caption'],
                'img_path'    => $post['img_path'],
                'user_id'     => $user->id,
                'catrgory_id' => $post['category'],
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }

    }
}
