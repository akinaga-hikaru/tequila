/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */

/***** ボタン名定義 ***************************
 * ① [項目選択]ボタン => typeボタン
 * ② [商品一覧]（プルダウンなし）ボタン => listボタン
 * ③ [商品一覧]（プルダウンあり）ボタン => listWithPulldownボタン
 * ④ [プルダウン]ボタン => pulldownボタン
*********************************************/

/* --------------- データ定義 ---------------　*/
import lists from '../data/listData'; // ② [商品一覧]（プルダウンなし）データ
import listWithPulldowns from '../data/listDataWithPulldown'; // ③ [商品一覧]（プルダウンあり）データ


/* --------------- Function定義 ---------------　*/
import onTypeBtn from '../function/onTypeBtn'; // ① [項目選択]ボタン処理
import onListBtn from '../function/onListBtn'; // ② [商品一覧]（プルダウンなし）ボタン処理
import onListWithPullDownBtn from '../function/onListWithPullDownBtn'; // ③ [商品一覧]（プルダウンあり）ボタン処理
import onPulldownBtn from '../function/onPulldownBtn'; // ④ [プルダウン]ボタン処理


/* ---------------　実行処理 ---------------　*/
/***** 0. 全商品コンテナ非表示 *****/
$(js.syouhin_container).hide();


/***** ※. 登録内容確認画面時のみ表示（例外パターン） *****/
$(js.form_confirm).find(js.syouhin_container).show();


/***** 1. [項目選択] > [商品一覧]に適用 *****/
$.each(lists, function(index, list){

    // ① [項目選択]ボタン押下時処理
    onTypeBtn(list['name'], list['time']);

    // ② [商品一覧]（プルダウンなし）ボタン押下時処理
    onListBtn(list['name'], list['match']);

});


/***** 2. [項目選択] > [商品一覧] > [プルダウン]に適用 *****/
$.each(listWithPulldowns, function(index, listWithPulldown){

    // ① [項目選択]ボタン押下時処理
    onTypeBtn(listWithPulldown[0]['name']['major'], listWithPulldown[0]['time']);

    $.each(listWithPulldown, function(index, pulldown){

        // ③ [商品一覧]（プルダウンあり）ボタン押下時処理
        onListWithPullDownBtn(pulldown['name'], pulldown['match'], pulldown['hide']);

        // ④ [プルダウン]ボタン押下時処理
        onPulldownBtn(pulldown['name'], pulldown['match']);

    });
});


/***** 3. 対象商品がないメッセージを表示させる商品種別 *****/
// 現状はホベンの一覧のみ対象商品なし
$(js.no_products).on('click', function(){
    $(js.syouhin_message).show();
});
