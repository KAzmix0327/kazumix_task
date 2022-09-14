<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 一件だけinsertする
        DB::table('tasks')->insert([
            'title' => 'PHP',
            'body' => 'PHPは、Hypertext Preprocessorの略です。',
        ]);

        # paramに配列を代入
        $param = [
            [
                'title' => 'HTML',
                'body' => 'HTMLは、Hypertext Markup Languageの略です。',
            ],
            [
                'title' => 'CSS',
                'body' => "CSSは、\nCascading Style Sheets\nの略です。",

            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
