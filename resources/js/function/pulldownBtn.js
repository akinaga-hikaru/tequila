import js from '../data/classNames'; // JS操作用classNameデータ
import hideClass from '../function/hideClass';
import getClickClass from '../function/getClickClass';
import addCSS from '../function/addCSS';

/** 〜 [プルダウン]ボタン押下時処理 〜
 * @param name[minor] string・・・[商品一覧]名
 * @param time int・・・トグル表示の時間
 * @param match[name] string・・・表示させる個別の[商品一覧]名
 * @param match[way] string・・・表示させるクラス抽出の正規表現
 */
function pulldownBtn(name, time, match){

    // クリック時の処理
    $(js.prefix + name['minor'] + '_' + match['name']).on('click', function(){

        // 1. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        const text =  $(this).text();
        $(js.syouhin_title).text(text);

        // 2. 選択中のリストのCSS指定
        addCSS(this, js.btn_down, { background: "rgba(255,165,0,0.5)" });

        // 3. 一度、商品コンテナとメッセージを非表示
        hideClass([js.syouhin_container, js.syouhin_message]);

        // 4. クリックしたリストのみのjs-〜のクラス名を取得
        const clickClass = getClickClass(this, match['way'])

        // 5. クリックしたリストの商品コンテナのみを表示する
        $(clickClass).slideDown(time);

    });

};
export default pulldownBtn
