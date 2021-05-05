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
            ['id' => 'mixed', 'name' => 'Mixed','name_kana' => 'ミクスト',],
            ['id' => 'agave100', 'name' => '100% de Agave','name_kana' => 'アガベ100%',],
            ['id' => 'liquor', 'name' => 'Liquor','name_kana' => 'リキュール',],
        ];

        // テーブルにデータを挿入
        foreach ($mixes as $mix) {
            DB::table('mixes')->insert([
                'id' => $mix['id'],
                'name' => $mix['name'],
                'name_kana' => $mix['name_kana'],
            ]);
        }
    }
}
