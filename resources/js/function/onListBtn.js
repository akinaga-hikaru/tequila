import hideClass from '../function/hideClass';
import getClickClass from '../function/getClickClass';
import addCSS from '../function/addCSS';
import checkUA from '../function/checkUA';

/** 〜 [商品一覧]ボタン押下時処理（[プルダウン]なし） 〜
 * @param name string・・・[項目選択]名
 * @param match string・・・表示させるクラス抽出の正規表現
*/
function onListBtn(name, match){

    // クリック時の処理
    $(js.prefix + name + '-list').on('click', function(){

        // 1. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        const text =  $(this).text();
        $(js.syouhin_title).text(text);

        // 2. 選択中のリストのCSS指定
        addCSS(this, js.btn_list);

        // 3. 一度、商品コンテナとメッセージを非表示
        hideClass([js.syouhin_container, js.syouhin_message]);

        // 4. SP時サイドエリアを非表示
        if(checkUA()) {
            $(js.type_toggle).text('▼');
            $(js.aside).css({ height: 'auto' });
            hideClass([js.btn_type, js.btn_list, js.btn_down]);
        }

        // 5. クリックしたリストのみのjs-〜のクラス名を取得
        const clickClass = getClickClass(this, match);

        // 6. クリックしたリストの商品コンテナのみを表示する
        $(clickClass).fadeIn(400);

        // 7. 画面トップへ
        window.scrollTo(0, 0);

    });

};
export default onListBtn
