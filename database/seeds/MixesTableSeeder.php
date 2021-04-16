<?php

use Illuminate\Database\Seeder;

class MixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 挿入データの設定
        $mixes =[
            ['id' => 'mixed', 'name' => 'Mixed',],
            ['id' => 'agave100', 'name' => '100% de Agave',],
            ['id' => 'liquor', 'name' => 'Liquor',],
        ];

        // テーブルにデータを挿入
        foreach ($mixes as $mix) {
            DB::table('mixes')->insert([
                'id' => $mix['id'],
                'name' => $mix['name'],
            ]);
        }
    }
}
