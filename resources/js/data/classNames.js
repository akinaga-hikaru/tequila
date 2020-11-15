// JS処理用の共通classの設定

/* ---------- クラス名定義 ---------- */
// Prefix
const js = '.js-'

// 商品コンテナ
const syouhin_container = js + 'syouhin-container'
const syouhin_title = js + 'syouhin-title'
const syouhin_message = js + 'syouhin-message'

// グローバルメニュー
const global_menu = js + 'global-menu'
const global_menu__btn_sp = js + 'global-menu__btn-sp'

// サイドリスト
const aside = js + 'aside'
const type_toggle = js + 'type-toggle'
const btn = js + 'btn'
const btn_type = btn + '--type'
const btn_list = btn + '--list'
const btn_down = btn + '--down'

// 商品一覧種別
const aging_Joven = js + 'aging_Joven'

// 登録確認画面
const form_confirm = js + 'form-confirm'


/* ---------- まとめてエクスポート ---------- */
const classNames = {
    // Prefix
    prefix: js,
    // 商品コンテナ
    syouhin_container: syouhin_container,
    syouhin_title: syouhin_title,
    syouhin_message: syouhin_message,
    // グローバルメニュー
    global_menu: global_menu,
    global_menu__btn_sp: global_menu__btn_sp,
    // サイドリスト
    aside: aside,
    type_toggle: type_toggle,
    btn_type: btn_type,
    btn_list: btn_list,
    btn_down: btn_down,
    // 商品がないクラス
    no_products: aging_Joven,
    // 登録確認画面
    form_confirm: form_confirm,
}
export default classNames
