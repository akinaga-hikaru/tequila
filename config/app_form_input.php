<?php
/*
|--------------------------------------------------------------------------
| input項目の設定
|--------------------------------------------------------------------------
*/
return [
    'title' => [
        '項目名',
        '入力内容',
        '説明',
        '入力条件',
        '入力サンプル',
    ],
    'contents' => [
        'title_id' => [
            'title' => 'ブランドID',
            'type' => 'text',
            'description' => 'ブランドを識別するID',
            'terms' => '半角小文字英数字のみ',
            'sample' => '「Tres Reyes」 => 「tresreyes」',
        ],
        'title_name' => [
            'title' => 'ブランド名',
            'type' => 'text',
            'description' => 'アルファベットのブランド名',
            'terms' => '半角英数字推奨',
            'sample' => '「Tres Reyes」 => 「Tres Reyes」',
        ],
        'alt_name' => [
            'title' => '画像代替テキスト',
            'type' => 'text',
            'description' => '画像が表示できない時の説明文',
            'terms' => '半角英数字推奨',
            'sample' => '「Tres Reyes Silver」 => 「tres_reyes_silver」',
        ],
        'url' => [
            'title' => 'リンク',
            'type' => 'text',
            'description' => '画像をクリックした際の商品購入などのリンク',
            'terms' => '半角英数字推奨',
            'sample' => '-',
        ],
        'image' => [
            'title' => '画像',
            'type' => 'file',
            'description' => '表示させたい画像',
            'terms' => 'JPEG推奨(300x300)',
            'sample' => '「Tres Reyes」 => 「tres_reyes_silver.jpg」',
        ],
        'aging_sort' => [
            'title' => '熟成度ID',
            'type' => 'text',
            'description' => 'シルバー・レポサドなどの熟成度の識別ID',
            'terms' => '半角英数字推奨',
            'sample' => '「Silver」 => 「Blanco」',
        ],
        'aging' => [
            'title' => '熟成度名',
            'type' => 'text',
            'description' => 'シルバー・レポサドなどの熟成度',
            'terms' => '半角英数字推奨',
            'sample' => '「Silver」 => 「Silver」',
        ],
        'contents_alc' => [
            'title' => '度数/混成度',
            'type' => 'text',
            'description' => 'アルコール度数',
            'terms' => '半角英数字推奨',
            'sample' => '「40%でアガベ100%」 => 「40%/100%AGAVE」',
        ],
        'contents_dest' => [
            'title' => '蒸留所名',
            'type' => 'text',
            'description' => '生産された蒸留所名',
            'terms' => '全角文字',
            'sample' => '「クエルボ蒸留所」 => 「クエルボ蒸留所」',
        ],
        'contents_nom' => [
            'title' => 'NOM',
            'type' => 'text',
            'description' => '生産された蒸留所ナンバー',
            'terms' => '半角数字',
            'sample' => '「NOM 1122」 => 「1122」',
        ],
        'contents_local_id' => [
            'title' => '生産地方ID',
            'type' => 'text',
            'description' => '生産地方の識別ID',
            'terms' => '半角小文字英数字',
            'sample' => '「バジェス地方」 => 「valles」',
        ],
        'contents_local' => [
            'title' => '生産地方名',
            'type' => 'text',
            'description' => '生産された地方名',
            'terms' => '全角文字',
            'sample' => '「バジェス地方」 => 「バジェス地方」',
        ],
        'contents_area_id' => [
            'title' => '生産エリアID',
            'type' => 'text',
            'description' => '生産エリアの識別ID',
            'terms' => '半角小文字英数字',
            'sample' => '「テキーラ地区」 => 「tequila」',
        ],
        'contents_area' => [
            'title' => '生産エリア名',
            'type' => 'text',
            'description' => '生産されたエリア名',
            'terms' => '全角文字',
            'sample' => '「テキーラ地区」 => 「テキーラ地区」',
        ],
        'contents_info' => [
            'title' => '内容（情報）',
            'type' => 'text',
            'description' => '特記しておきたい情報',
            'terms' => '全角文字',
            'sample' => '-',
        ],
        'contents_review_flavor' => [
            'title' => 'レビュー内容（香り）',
            'type' => 'text',
            'description' => '香りに関するレビュー',
            'terms' => '全角文字',
            'sample' => '思うままに書いてください',
        ],
        'contents_review_top' => [
            'title' => 'レビュー内容（味）',
            'type' => 'text',
            'description' => '味に関するレビュー',
            'terms' => '全角文字',
            'sample' => '思うままに書いてください',
        ],
        'contents_review_after' => [
            'title' => 'レビュー内容（余韻）',
            'type' => 'text',
            'description' => '口の中に残る余韻に関するレビュー',
            'terms' => '全角文字',
            'sample' => '思うままに書いてください',
        ],
    ],
];
