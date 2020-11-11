import js from '../data/classNames'; // JS操作用classNameデータ
import hideClass from '../function/hideClass';
import addCSS from '../function/addCSS';

/** 〜 [商品一覧]ボタン押下時処理（[プルダウン]あり） 〜
 * @param name[major] string・・・[項目選択]名
 * @param name[minor] string・・・[商品一覧]名
 * @param time int・・・トグル表示の時間
 * @param match[name] string・・・表示させるクラス抽出の正規表現
 * @param hide array・・・非表示にさせたいクラス
 */
function listWithPullDownBtn(name, time, match, hide){

    // クリック時の処理
    $(js.prefix + name['major'] + '_' + match['name']).on('click', function(){

        // 1. 対象のエリアのリストを非表示
        $.each(hide, function(index, item) {
            $(js.prefix + name['minor'] + '_' + item).hide();
        })

        // 2. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        const text =  $(this).text();
        $(js.syouhin_title).text(text);

        // 3. 選択中のリストのCSS指定
        addCSS(this, js.btn_list, { background: "rgba(255,165,0,0.5)" });

        // 4. 一度、商品コンテナとメッセージを非表示
        hideClass([js.syouhin_container, js.syouhin_message]);

        // 5. クリックしたリストの商品コンテナのみを表示する
        $(js.prefix + name['minor'] + '_' + match['name']).slideDown(time);
        $(js.prefix + name['major'] + '_' + match['name'] + '_').slideDown(time);

    });

};
export default listWithPullDownBtn
