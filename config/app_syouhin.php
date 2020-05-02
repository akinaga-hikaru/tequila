<?php
/*
|--------------------------------------------------------------------------
| 商品種別の設定
|--------------------------------------------------------------------------
*/
return [
    // 生産地方定義
    'locals' => [
        [
            'local_id' => 'valles',
            'local' => 'バジェス地方',
            'description' => '〜新樽を用い辛味・苦味が特徴〜'
        ],
        [
            'local_id' => 'altos',
            'local' => 'ロスアルトス地方',
            'description' => '〜中古樽を用い旨味・甘味が特徴〜'
        ],
        [
            'local_id' => 'centro',
            'local' => 'ソナ・セントロ地方',
            'description' => '〜上記二つの地方の中間に位置する〜'
        ],
        [
            'local_id' => 'others',
            'local' => 'その他',
            'description' => '〜テキーラ5州で作られたもの〜'
        ],

    ],
    // 熟成度合い定義
    'agings' => [
        [
            'aging_id' => 'Blanco',
            'aging_name' => 'ブランコ',
            'description' => '〜熟成期間1ヶ月未満（シルバー・プラタ）〜'
        ],
        [
            'aging_id' => 'Hoben',
            'aging_name' => 'ホベン',
            'description' => '〜ブランコにレポサドかアネホを混合〜'
        ],
        [
            'aging_id' => 'Gold',
            'aging_name' => 'ゴールド',
            'description' => '〜特に規定なし〜'
        ],
        [
            'aging_id' => 'Reposado',
            'aging_name' => 'レポサド',
            'description' => '〜熟成期間最低2ヶ月〜'
        ],
        [
            'aging_id' => 'Anejo',
            'aging_name' => 'アネホ',
            'description' => '〜熟成期間最低1年〜'
        ],
        [
            'aging_id' => 'ExtraAnejo',
            'aging_name' => 'エクストラアネホ',
            'description' => '〜熟成期間最低3年〜'
        ],
        [
            'aging_id' => 'Others',
            'aging_name' => 'その他',
            'description' => '〜上記以外の特殊なもの〜'
        ],
        [
            'aging_id' => 'Mezcal',
            'aging_name' => '※メスカル',
            'description' => '〜産地の違い等によりテキーラと呼べないもの〜'
        ],
        [
            'aging_id' => 'Cocktail',
            'aging_name' => '※カクテル',
            'description' => '〜添加物ありのリキュール〜'
        ],
    ],
];
