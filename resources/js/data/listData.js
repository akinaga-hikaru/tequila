// 各項目にプルダウンのないリスト項目
export default [
    // [ブランド別]
    {
        'name': 'brand',
        'time': 1000,
        'match': /js-brand_[a-z-]*/
    },
    // [蒸留所別]
    {
        'name': 'dest',
        'time': 1000,
        'match': /js-dest_[0-9-]*/
    },
    // [熟成度合い別]
    {
        'name': 'aging',
        'time': 1000,
        'match': /js-aging_[A-z-]*/
    },
]
