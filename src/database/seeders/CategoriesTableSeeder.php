<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $param = [
            'content' => '商品のお届けについて'
        ];
        DB::table('categories')->insert($param);
        //2
        $param = [
            'content' => '商品の交換について'
        ];
        DB::table('categories')->insert($param);
        //3
        $param = [
            'content' => '商品トラブル'
        ];
        DB::table('categories')->insert($param);
        //4
        $param = [
            'content' => 'ショップへのお問合せ'
        ];
        DB::table('categories')->insert($param);
        //5
        $param = [
            'content' => 'その他'
        ];
        DB::table('categories')->insert($param);
    }
}
