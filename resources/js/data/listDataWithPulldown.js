// 各項目にプルダウンのあるリスト項目

// [生産地方別]
const area = [
    // [バジェス地方]
    {
        'name': {'0': 'local', '1': 'area'},
        'time': 500,
        'match': {'0': 'valles','1': /js-area_valles_[a-z-]*/},
        'hide': {'0': 'altos', '1': 'centro', '2': 'others',}
    },
    // [ロスアルトス地方]
    {
        'name': {'0': 'local', '1': 'area'},
        'time': 500,
        'match': {'0': 'altos', '1': /js-area_altos_[a-z-]*/},
        'hide': {'0': 'valles', '1': 'centro', '2': 'others',}
    },
    // [ソナセントロ地方]
    {
        'name': {'0': 'local', '1': 'area'},
        'time': 500,
        'match': {'0': 'centro', '1': /js-area_centro_[a-z-]*/},
        'hide': {'0': 'altos', '1': 'valles', '2': 'others',}
    },
    // [その他]
    {
        'name': {'0': 'local', '1': 'area'},
        'time': 500,
        'match': {'0': 'others', '1': /js-area_others_[a-z-]*/},
        'hide': {'0': 'altos', '1': 'centro', '2': 'valles',}
    },
]

// リスト項目をまとめてエクスポート
const data = {
    area: area,
}
export default data
