import hideClass from '../function/hideClass';
import addCSS from '../function/addCSS';

/** 〜 [項目選択]ボタン押下時処理 〜
 * @param name string・・・[項目選択]名
 * @param time int・・・トグル表示の時間
 */
function onTypeBtn(name, time){

    // クリック時の処理
    $(js.prefix + name + '-type').on('click', function(){

        // 1. 選択中のリストのCSS指定
        addCSS(this, js.btn_type);

        // 2. 一度、[商品一覧]/[プルダウン]リストとメッセージを非表示
        hideClass([js.btn_list, js.btn_down]);

        // 3. クリックしたリストのみを表示する
        $(js.prefix + name + '-list').slideToggle(time);

    });

};
export default onTypeBtn
