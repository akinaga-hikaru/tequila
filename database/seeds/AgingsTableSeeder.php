<?php

use Illuminate\Database\Seeder;

class AgingsTableSeeder extends Seeder
{
    /**
     * agingsテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入データを設定
        $agings = [
            'blanco' => [
                'id' => 'blanco',
                'name' => 'Blanco',
                'name_kana' => 'ブランコ',
                'type' => 'tequila',
                'definition' => 'シルバー,プラタ,ホワイト,クリスタル',
                'rule' => 'オーク樽による熟成をしないもの。または、熟成期間が60日以内であること。',
                'description' => '～熟成期間1ヶ月未満（シルバー・プラタ）～'
            ],
            'gold' => [
                'id' => 'gold',
                'name' => 'Gold',
                'name_kana' => 'ゴールド',
                'type' => 'tequila',
                'definition' => '琥珀色由来',
                'rule' => '特に規定が設けられていないが、ブランコとレポサドの中間のような色味のもの。',
                'description' => '～特に規定なし～'
            ],
            'reposado' => [
                'id' => 'reposado',
                'name' => 'Reposado',
                'name_kana' => 'レポサド',
                'type' => 'tequila',
                'definition' => '休ませたの意',
                'rule' => '最低2ヶ月間のオーク樽により熟成したもの。',
                'description' => '～熟成期間最低2ヶ月～'
            ],
            'anejo' => [
                'id' => 'anejo',
                'name' => 'Anejo',
                'name_kana' => 'アネホ',
                'type' => 'tequila',
                'definition' => '熟成させたの意',
                'rule' => '最低1年間のオーク樽により熟成したもの。オーク樽は600L以下のサイズであること。',
                'description' => '～熟成期間最低1年～'
            ],
            'extraanejo' => [
                'id' => 'extraanejo',
                'name' => 'ExtraAnejo',
                'name_kana' => 'エクストラアネホ',
                'type' => 'tequila',
                'definition' => 'アネホを超えた熟成',
                'rule' => '最低3年間のオーク樽により熟成したもの。オーク樽は600L以下のサイズであること。',
                'description' => '～熟成期間最低3年～'
            ],
            'joven' => [
                'id' => 'joven',
                'name' => 'Joven',
                'name_kana' => 'ホベン',
                'type' => 'tequila',
                'definition' => 'オロ',
                'rule' => 'ブランコとレポサド（またはアネホ）と混ぜたもの。',
                'description' => '～ブランコにレポサドかアネホを混合～'
            ],
            'others' => [
                'id' => 'others',
                'name' => 'Others',
                'name_kana' => 'その他',
                'type' => 'others',
                'definition' => 'aaa',
                'rule' => 'aaa',
                'description' => '～上記以外の特殊なもの～'
            ],
            'cocktail' => [
                'id' => 'cocktail',
                'name' => 'Cocktail',
                'name_kana' => 'カクテル',
                'type' => 'cocktail',
                'definition' => '添加物が1%以上',
                'rule' => '糖蜜などの添加物が1%以上含まれるものは、カクテルやリキュールなどの呼称になる。',
                'description' => '～添加物ありのリキュール～'
            ],
            'mezcal' => [
                'id' => 'mezcal',
                'name' => 'Mezcal',
                'name_kana' => 'メスカル',
                'type' => 'mezcal',
                'definition' => 'メキシコ外産',
                'rule' => 'メキシコの指定された地区以外のものはアガベスピリッツやメスカルという呼称になる。',
                'description' => '～産地の違い等によりテキーラと呼べないもの～'
            ],
        ];

        // テーブルにデータを挿入
        foreach ($agings as $aging) {
            DB::table('agings')->insert([
                'id' => $aging['id'],
                'name' => $aging['name'],
                'name_kana' => $aging['name_kana'],
                'type' => $aging['type'],
                'definition' => $aging['definition'],
                'rule' => $aging['rule'],
                'description' => $aging['description'],
            ]);
        }
    }
}
