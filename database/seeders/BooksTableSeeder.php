<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => '神注視的孩子',
                'author' => '相思染',
                'description' => '伊萊爾遇見了一個奇怪的少年',
                'image' => 'images/books/book1.png',
                'status' => '已完結',
                'views' => 99900,
                'likes' => 99900,
                'favorites' => 99900,
                'comments' => 99900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '偵探在菜市場迷了路',
                'author' => '牛小流',
                'description' => '偵探初次辦案作家新登場',
                'image' => 'images/books/book2.png',
                'status' => '連載中',
                'views' => 99900,
                'likes' => 99900,
                'favorites' => 99900,
                'comments' => 99900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '古書堂事件手帖',
                'author' => '相思染',
                'description' => '伊萊爾遇見了一個奇怪少年',
                'image' => 'images/books/book3.png',
                'status' => '已完結',
                'views' => 99900,
                'likes' => 99900,
                'favorites' => 99900,
                'comments' => 99900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
