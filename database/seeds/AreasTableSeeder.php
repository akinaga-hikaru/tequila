<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * areasテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入するデータの設定
        $areas = [
            // ハリスコ州バジェス地方
            'tequila' => ['id' => 'tequila', 'name' => 'Tequila', 'name_kana' => 'テキーラ地区', 'local_id' => 'valles', 'state_id' => 'jalisco'],
            'elarenal' => ['id' => 'elarenal', 'name' => 'El Arenal', 'name_kana' => 'エルアレナル地区', 'local_id' => 'valles', 'state_id' => 'jalisco'],
            'amatitan' => ['id' => 'amatitan', 'name' => 'Amatitan', 'name_kana' => 'アマティタン地区', 'local_id' => 'valles', 'state_id' => 'jalisco'],
            'lasjuntas' => ['id' => 'lasjuntas', 'name' => 'Lasjuntas', 'name_kana' => 'ラス・フンタス地区', 'local_id' => 'valles', 'state_id' => 'jalisco'],
            // ハリスコ州ロスアルトス地方
            'arandas' => ['id' => 'arandas', 'name' => 'Arandas', 'name_kana' => 'アランダス地区', 'local_id' => 'altos', 'state_id' => 'jalisco'],
            'atotonirco' => ['id' => 'atotonirco', 'name' => 'Atotonirco', 'name_kana' => 'アトトニルコ地区', 'local_id' => 'altos', 'state_id' => 'jalisco'],
            'jesusmaria' => ['id' => 'jesusmaria', 'name' => 'Jesusmaria', 'name_kana' => 'ヘススマリア地区', 'local_id' => 'altos', 'state_id' => 'jalisco'],
            'ayotlan' => ['id' => 'ayotlan', 'name' => 'Ayotlan', 'name_kana' => 'アヨトラン地区', 'local_id' => 'altos', 'state_id' => 'jalisco'],
            // ハリスコ州ソナ・セントロ地方
            'zapopan' => ['id' => 'zapopan', 'name' => 'Zapopan', 'name_kana' => 'サポパン地区', 'local_id' => 'centro', 'state_id' => 'jalisco'],
            'juanakatlan' => ['id' => 'juanakatlan', 'name' => 'Juanakatlan', 'name_kana' => 'ファナカトラン地区', 'local_id' => 'centro', 'state_id' => 'jalisco'],
            'guadalajara' => ['id' => 'guadalajara', 'name' => 'Guadalajara', 'name_kana' => 'グアダラハラ地区', 'local_id' => 'centro', 'state_id' => 'jalisco'],
            // その他
            'penjamo' => ['id' => 'penjamo', 'name' => 'Penjamo', 'name_kana' => 'ペンハモ地区', 'local_id' => 'others', 'state_id' => 'guanajuato'],
        ];

        // テーブルにデータを挿入
        foreach ($areas as $area) {
            DB::table('areas')->insert([
                'id' => $area['id'],
                'name' => $area['name'],
                'name_kana' => $area['name_kana'],
                'local_id' => $area['local_id'],
                'state_id' => $area['state_id'],
            ]);
        }
    }
}
