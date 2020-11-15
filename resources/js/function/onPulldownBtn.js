import js from '../data/classNames'; // JS操作用classNameデータ
import hideClass from '../function/hideClass';
import getClickClass from '../function/getClickClass';
import addCSS from '../function/addCSS';
import checkUA from '../function/checkUA';

/** 〜 [プルダウン]ボタン押下時処理 〜
 * @param name[minor] string・・・[商品一覧]名
 * @param match[name] string・・・表示させる個別の[商品一覧]名
 * @param match[way] string・・・表示させるクラス抽出の正規表現
 */
function onPulldownBtn(name, match){

    // クリック時の処理
    $(js.prefix + name['minor'] + '_' + match['name']).on('click', function(){

        // 1. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        const text =  $(this).text();
        $(js.syouhin_title).text(text);

        // 2. 選択中のリストのCSS指定
        addCSS(this, js.btn_down, { background: "rgba(255,165,0,0.5)" });

        // 3. 一度、商品コンテナとメッセージを非表示
        hideClass([js.syouhin_container, js.syouhin_message]);

        // 4. SP時サイドエリアを非表示
        if(checkUA()) {
            $(js.type_toggle).text('▼');
            $(js.aside).css({ height: 'auto' });
            hideClass([js.btn_type, js.btn_list, js.btn_down]);
        }

        // 5. クリックしたリストのみのjs-〜のクラス名を取得
        const clickClass = getClickClass(this, match['way'])

        // 6. クリックしたリストの商品コンテナのみを表示する
        $(clickClass).fadeIn(400);

    });

};
export default onPulldownBtn
