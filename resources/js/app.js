import './bootstrap';
import js from './data/classNames'
import hideClass from './function/hideClass'

/* -----------------------------------------------
    画面共通処理
----------------------------------------------- */
/* --------------- SPのグローバルメニューのリスト表示設定 --------------- */
$(function() {
    $(js.global_menu__btn_sp).on('click', function(){
        $(js.global_menu).slideToggle();
    });
});


/* --------------- サイドメニュー表示設定 --------------- */
$(js.type_toggle).on('click', function(){

    // 1. ①[項目選択]ボタンの表示設定
    $(js.btn_type).slideToggle(500);

    // 2. ②③[商品一覧], ④[プルダウン] リストを非表示
    hideClass([js.btn_list, js.btn_down]);

    // 3. テキスト表示切替
    const btn_text = $(this).text();
    if (btn_text === "項目一覧 ▼"){
        $(this).text('項目一覧 ▲');
    } else {
        $(this).text('項目一覧 ▼');
    }

});


/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
import './page/syouhin'
