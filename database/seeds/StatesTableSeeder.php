<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * statesテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入データを設定
        $states = [
            'jalisco' => [
                'id' => 'jalisco',
                'name' => 'Jalisco',
                'name_kana' => 'ハリスコ州',
                'states_type' => 'tequila',
            ],
            'guanajuato' => [
                'id' => 'guanajuato',
                'name' => 'Guanajuato',
                'name_kana' => 'グァナファト州',
                'states_type' => 'tequila',
            ],
            'nayarit' => [
                'id' => 'nayarit',
                'name' => 'Nayarit',
                'name_kana' => 'ナヤリ州',
                'states_type' => 'tequila',
            ],
            'michoacan' => [
                'id' => 'michoacan',
                'name' => 'Michoacan',
                'name_kana' => 'ミチョアカン州',
                'states_type' => 'tequila',
            ],
            'tamaulipas' => [
                'id' => 'tamaulipas',
                'name' => 'Tamaulipas',
                'name_kana' => 'タマウリパス州',
                'states_type' => 'tequila',
            ],
            'zacatecas' => [
                'id' => 'zacatecas',
                'name' => 'Zacatecas',
                'name_kana' => 'サカテカス州',
                'states_type' => 'mezcal',
            ],
        ];

        // テーブルにデータを挿入
        foreach ($states as $state) {
            DB::table('states')->insert([
                'id' => $state['id'],
                'name' => $state['name'],
                'name_kana' => $state['name_kana'],
                'states_type' => $state['states_type'],
            ]);
        }
    }
}
