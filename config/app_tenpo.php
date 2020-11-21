<?php
/*
|--------------------------------------------------------------------------
| 取扱店の設定
|--------------------------------------------------------------------------
*/
return [
    '1' => [
        'id' => 'shops',
        'title' => '■ 取扱店一覧',
        'contents' => [
            's1' => [
                'title' => 'Bar',
                'paragraph' => '都内にて様々なテキーラを提供している専門バー',
                'table' => [
                    'header' => [
                        '店名',
                        '住所',
                        'アクセス',
                        '詳細',
                    ],
                    'cells' => [
                        'shop1' => [
                            'name' => 'Side B Bar',
                            'contact' => '東京都港区新橋2-9-7 一鶴ビル4F',
                            'access' => '新橋SL広場徒歩1分',
                            'description' => '通販サイトテキーラムーチョ運営の店舗。販売も行っている。',
                            'url' => 'http://www.side-b-bar.com/',
                        ],
                        'shop2' => [
                            'name' => 'AGAVE',
                            'contact' => '東京都港区六本木7-18-11 DMビルB1F',
                            'access' => '六本木駅2番出口徒歩1分',
                            'description' => 'カクテルだけでなく100種類以上のテキーラを取り揃えている。',
                            'url' => 'http://agave.jp/menu/',
                        ],
                    ],
                ],
            ],
            's2' => [
                'title' => 'Store',
                'paragraph' => '都内にて様々なテキーラ販売を行っている酒屋',
                'table' => [
                    'header' => [
                        '店名',
                        '住所',
                        'アクセス',
                        '詳細',
                    ],
                    'cells' => [
                        'shop1' => [
                            'name' => '目白田中屋',
                            'contact' => '東京都豊島区目白3-4-14',
                            'access' => '目白駅徒歩1分',
                            'description' => 'エルチャッロ、カサノブレなどの定番からロクアやラ・コフラディアのカタリーナなど、新規参入モデルも取り揃えている。',
                            'url' => 'http://agave.jp/menu/',
                        ],
                        'shop2' => [
                            'name' => 'リカーズハセガワ本店',
                            'contact' => 'JR東京駅 八重洲地下街',
                            'access' => '東京駅0分',
                            'description' => 'クエルボを始めエルテソロ、グランパトロンなど高級ブランドまで40～50種類ほど。',
                            'url' => 'https://www.liquors-hasegawa.com/',
                        ],
                    ],
                ],
            ],
            's3' => [
                'title' => 'Online',
                'paragraph' => '通信販売で多くのテキーラを扱っている店・テキーラ専門店',
                'table' => [
                    'header' => [
                        '店名',
                        'コンタクト',
                        'アクセス',
                        '詳細',
                    ],
                    'cells' => [
                        'shop1' => [
                            'name' => '武蔵屋',
                            'contact' => '0120-11-6348',
                            'access' => '世田谷',
                            'description' => 'クエルボを始め、サウザ、オルメカなどの定番を主に60～70種類ほど。',
                            'url' => 'https://www.musashiya-net.co.jp/products/list.php?category_id=419',
                        ],
                        'shop2' => [
                            'name' => 'テキーラムーチョ',
                            'contact' => '03-5510-9173',
                            'access' => '港区新橋',
                            'description' => 'テキーラ専門の通販サイト。50ブランド近く扱い、国内屈指の品揃え',
                            'url' => 'http://wazawaza.jp/',
                        ],
                        'shop3' => [
                            'name' => 'Premium Tequila.jp',
                            'contact' => '03-6759-9796',
                            'access' => '-',
                            'description' => 'テキーラ専門の通販サイト。ブランド別・蒸留所別などで検索でき、また、丁寧に詳細が書いてありファンにはたまらない',
                            'url' => 'http://www.premium-tequila.jp/',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
