<?php
/*
|--------------------------------------------------------------------------
| レイアウトの設定
|--------------------------------------------------------------------------
*/
return [
    'meta' => [
        'description' => '各種テキーラを飲み比べたインデックス。テキーラの基礎知識も記載しているので、入門用に。',
        'url' => 'http://www.tequipedia.com/',
        'image' => './image/icon/tequila-icon.png',
    ],
    'main_title' => 'テキーラ全書',
    'global_menu' => [
        '/' => 'テキーラとは',
        'syouhin' => '商品紹介',
        'tenpo' => '取扱店紹介',
        'bunken' => '参考文献',
        // 'form-input' => 'データ登録',
    ],
    'aside' => [
        'section_menu_open' => '▲',
        'section_menu_close' => '▼',
    ],
    'confirm_btn' => '確認する',
    'correct_btn' => '修正する',
    'register_btn' => '登録する',
    'footer_text' => 'presented by Tequipedia, producted by Laravel',
];
