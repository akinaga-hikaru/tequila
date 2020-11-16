import hideClass from '../function/hideClass';
/** 〜 サイドエリア表示状態管理 〜
 * @param on string・・・メニューを閉じる処理か開く処理かのフラグ（'open' or 'close'）
 */
function asideState(on) {

    // クローズの場合
    if(on === 'close') {

        // セクションメニュー（▼）ボタンのテキスト変更
        $(js.type_toggle).text('▼');

        // サイドエリアの高さ調整（スクロールのため）
        $(js.aside).css({ height: 'auto' });

        // サイドリストを非表示
        hideClass([js.btn_type, js.btn_list, js.btn_down]);
    }

    // オープンの場合
    else if(on === 'open') {

        // セクションメニュー（▼）ボタンのテキスト変更
        $(js.type_toggle).text('▲');

        // サイドエリアの高さ調整（スクロールのため）
        $(js.aside).css({ height: '95%' });

        // グローバルメニューのリストを非表示
        $(js.global_menu).hide();
    }

}
export default asideState
