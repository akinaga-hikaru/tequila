import './bootstrap';
import checkUA from './function/checkUA'
import asideState from './state/aside'

// ※1 使用するクラス名はconfig/app_class_js.phpで定義
// ※2 定義はresources/views/layout/layout.blade.phpでグローバル変数「js」としてJSに渡している

/* -----------------------------------------------
    画面共通処理
----------------------------------------------- */
$(function() {

    // ***** ■ SP時のみの動作 *****
    if (checkUA()) {

        /* --------------- SPのグローバルメニューのリスト表示設定 --------------- */
        // ****  [項目一覧]ボタン押下時の処理 ****
        $(js.global_menu__btn_sp).on('click', function(){

            // リストをトグル表示
            $(js.global_menu).slideToggle();

            // サイドエリアの表示状態：クローズ
            asideState('close');

        });

        /* --------------- サイドメニュー表示設定 --------------- */
        // ****  [項目一覧]ボタンを非表示 ****
        $(js.btn_type).hide();

        // ****  [項目一覧]ボタン押下時の処理 ****
        $(js.type_toggle).on('click', function(){

            // *** 1. ①[項目選択]ボタンの表示設定 ***
            $(js.btn_type).slideToggle(500);

            // *** 2. テキスト表示切替 ***
            const btn_text = $(this).text();

            /* オープンの場合 */ if (btn_text === aside_text.section_menu_close){ asideState('open'); }
            /* クローズの場合 */ else if (btn_text === aside_text.section_menu_open){ asideState('close'); }
            /* 初期動作の場合 */ else { asideState('open'); }

        });

    }

    // ***** ■ PC時のみの動作 *****
    else {

        /* --------------- サイドエリアをスクロールしても常に表示する設定 --------------- */
        $(window).on('scroll', function() {

            // ウインドウ上部のスクロール位置取得
            const scroll_top = $(window).scrollTop();

            // サイドエリアをスクロールさせたい位置設定
            const header_height = 64;

            // 指定のスクロール位置を越えたらサイドエリアを固定する処理
            if(scroll_top >= header_height) {
                $(js.aside_scroll_on).css({
                    position: 'relative',
                    top: (scroll_top - header_height) + 'px',
                    left: '0'
                });
            } else {
                $(js.aside_scroll_on).css({ position: 'unset' });
            }

        });

    }

});

/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
import './page/syouhin'
