<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'user_id' => 1,
            'prefecture_id' => 1,
            'culture_id' => 2,
            'place' => '知床',
            'title' => '旅行行ってきました。',
            'body' => '寒かったです。',
            'reference' => 'https://www.shiretoko.asia/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'id' => 2,
            'user_id' => 1,
            'prefecture_id' => 2,
            'culture_id' => 1,
            'place' => '青森市',
            'title' => 'ねぶた祭りに行ってきました。',
            'body' => '一緒に跳ねて楽しかったです。',
            'reference' => 'https://www.nebuta.jp/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
