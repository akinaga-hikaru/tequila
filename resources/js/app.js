import './bootstrap';
import js from './data/classNames'
import checkUA from './function/checkUA'
import asideState from './state/aside'

/* -----------------------------------------------
    画面共通処理
----------------------------------------------- */
/* --------------- SPのグローバルメニューのリスト表示設定 --------------- */
// ***** ■ SP時のみの動作 *****
$(function() {

    // ****  [項目一覧]ボタン押下時の処理 ****
    $(js.global_menu__btn_sp).on('click', function(){

        // リストをトグル表示
        $(js.global_menu).slideToggle();

        // サイドエリアの表示状態：クローズ
        asideState('close');

    });

});


/* --------------- サイドメニュー表示設定 --------------- */
// ***** ■ SP時のみの動作 *****
if (checkUA()) {

    // ****  [項目一覧]ボタンを非表示 ****
    $(js.btn_type).hide();

    // ****  [項目一覧]ボタン押下時の処理 ****
    $(js.type_toggle).on('click', function(){

        // *** 1. ①[項目選択]ボタンの表示設定 ***
        $(js.btn_type).slideToggle(500);

        // *** 2. テキスト表示切替 ***
        const btn_text = $(this).text();

        /* オープンの場合 */ if (btn_text === "▼"){ asideState('open'); }
        /* クローズの場合 */ else if (btn_text === "▲"){ asideState('close'); }
        /* 初期動作の場合 */ else { asideState('open'); }

    });

}


/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
import './page/syouhin'
