<?php

use Illuminate\Database\Seeder;

class LocalsTableSeeder extends Seeder
{
    /**
     * localsテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入データを設定
        $locals = [
           'valles' => [
               'id' => 'valles',
               'name' => 'Valles',
               'name_kana' => 'バジェス地方',
               'state_id' => 'jalisco',
               'description' => '新樽を用い辛味・苦味が特徴',
            ],
           'altos' => [
               'id' => 'altos',
               'name' => 'Los Altos',
               'name_kana' => 'ロスアルトス地方',
               'state_id' => 'jalisco',
               'description' => '中古樽を用い旨味・甘味が特徴',
            ],
           'centro' => [
               'id' => 'centro',
               'name' => 'Centro',
               'name_kana' => 'ソナ・セントロ地方',
               'state_id' => 'jalisco',
               'description' => '上記二つの地方の中間に位置する',
            ],
           'others' => [
               'id' => 'others',
               'name' => 'Others',
               'name_kana' => 'その他',
               'state_id' => 'others',
               'description' => 'ハリスコ州以外',
            ],
        ];

        // テーブルにデータを挿入
        foreach ($locals as $local) {
            DB::table('locals')->insert([
                'id' => $local['id'],
                'name' => $local['name'],
                'name_kana' => $local['name_kana'],
                'state_id' => $local['state_id'],
                'description' => $local['description'],
            ]);
        }
    }
}
