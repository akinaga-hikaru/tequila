<?php
/*
|--------------------------------------------------------------------------
| 商品種別の設定
|--------------------------------------------------------------------------
*/
return [
    'page' => [
        'section_title' => '▼ からリストを選択して表示します',
        'other_area' => 'その他地区',
    ],
    'container' => [
        'image' => [
           'base_dir' => '/image/syouhin/',
           'link_text' => '外部の商品ページへ'
        ],
        'alc' => '度数',
        'dest' => '蒸留所',
        'nom' => '蒸留所番号',
        'local' => '生産地域',
        'info' => '情報',
        'flavor' => '香り',
        'top' => '味',
        'after' => '余韻',
    ],
    'type' => [
        'maker' => 'ブランド別',
        'dest' => '蒸留所別',
        'local' => '生産地方別',
        'aging' => '熟成度合い別',
    ],
    'list' => [
        // 生産地方定義
        'locals' => [
            [
                'local_id' => 'valles',
                'local' => 'ハリスコ州バジェス地方',
                'description' => '〜新樽を用い辛味・苦味が特徴〜'
            ],
            [
                'local_id' => 'altos',
                'local' => 'ハリスコ州ロスアルトス地方',
                'description' => '〜中古樽を用い旨味・甘味が特徴〜'
            ],
            [
                'local_id' => 'centro',
                'local' => 'ハリスコ州ソナ・セントロ地方',
                'description' => '〜上記二つの地方の中間に位置する〜'
            ],
            [
                'local_id' => 'others',
                'local' => 'その他の州',
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
                'aging_id' => 'Joven',
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
    ],
];
