// 各項目にプルダウンのあるリスト項目

// [生産地方別]
const area = [
    // [バジェス地方]
    {
        'name': {'major': 'local', 'minor': 'area'},
        'time': 500,
        'match': {'name': 'valles','way': /js-area_valles_[a-z-]*/},
        'hide': ['altos', 'centro', 'others',]
    },
    // [ロスアルトス地方]
    {
        'name': {'major': 'local', 'minor': 'area'},
        'time': 500,
        'match': {'name': 'altos', 'way': /js-area_altos_[a-z-]*/},
        'hide': ['valles', 'centro', 'others',]
    },
    // [ソナセントロ地方]
    {
        'name': {'major': 'local', 'minor': 'area'},
        'time': 500,
        'match': {'name': 'centro', 'way': /js-area_centro_[a-z-]*/},
        'hide': ['altos', 'valles', 'others',]
    },
    // [その他]
    {
        'name': {'major': 'local', 'minor': 'area'},
        'time': 500,
        'match': {'name': 'others', 'way': /js-area_others_[a-z-]*/},
        'hide': ['altos', 'centro', 'valles',]
    },
]

// リスト項目をまとめてエクスポート
const data = [
    area,
]
export default data
