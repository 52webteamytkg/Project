<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category 配列データの作成
        $categories = [
            [
                'name' => 'African',
                'type' => 2,
            ],
            [
                'name' => 'Asian',
                'type' => 2,
            ],
            [
                'name' => 'Australian',
                'type' => 2,
            ],
            [
                'name' => 'European',
                'type' => 2,
            ],
            [
                'name' => 'North American',
                'type' => 2,
            ],
            [
                'name' => 'Central American',
                'type' => 2,
            ],
            [
                'name' => 'South American',
                'type' => 2,
            ],
        ];

        // deta登録

        foreach ($categories as $category) {
            DB::table('catecories')->insert([
                'id'    => '',
                'name'  => '',
                'type'  => '',
            ]);
        }
    }
}
