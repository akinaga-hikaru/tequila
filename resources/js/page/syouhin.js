/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */

/***** ボタン名定義 ***************************
 * ① [項目選択]ボタン => sortボタン
 * ② [商品一覧]（プルダウンなし）ボタン => listボタン
 * ③ [商品一覧]（プルダウンあり）ボタン => listWithPulldownボタン
 * ④ [プルダウン]ボタン => pulldownボタン
*********************************************/

/* ---------------データ定義 ---------------　*/
import lists from '../data/listData.js'; // ② [商品一覧]（プルダウンなし）データ
import listWithPulldowns from '../data/listDataWithPulldown.js'; // ③ [商品一覧]（プルダウンあり）データ

/* ---------------Function定義 ---------------　*/
import sortBtn from '../function/sortBtn.js'; // ① [項目選択]ボタン処理
import listBtn from '../function/listBtn.js'; // ② [商品一覧]（プルダウンなし）ボタン処理
import listWithPullDownBtn from '../function/listWithPullDownBtn.js'; // ③ [商品一覧]（プルダウンあり）ボタン処理
import pulldownBtn from '../function/pulldownBtn.js'; // ④ [プルダウン]ボタン処理


/* ---------------　実行処理 ---------------　*/

/***** 0. 全商品コンテナ・項目選択ボタン非表示 *****/
$('.js-syouhin-container').hide();
$('.js-btn--type').hide();

/***** ※. 登録内容確認画面時のみ表示（例外パターン） *****/
$('.form-confirm').find('.js-syouhin-container').show();

/***** 1. [項目選択] > [商品一覧]に適用 *****/
$.each(lists, function(index, list){

    // ① [項目選択]ボタン押下時処理
    sortBtn(list['name'], list['time']);

    // ② [商品一覧]（プルダウンなし）ボタン押下時処理
    listBtn(list['name'], list['match']);

});

/***** 2. [項目選択] > [商品一覧] > [プルダウン]に適用 *****/
$.each(listWithPulldowns, function(index, listWithPulldown){

    // ① [項目選択]ボタン押下時処理
    sortBtn(listWithPulldown[0]['name']['major'], listWithPulldown[0]['time']);

    $.each(listWithPulldown, function(index, pulldown){

        // ③ [商品一覧]（プルダウンあり）ボタン押下時処理
        listWithPullDownBtn(pulldown['name'], pulldown['time'], pulldown['match'], pulldown['hide']);

        // ④ [プルダウン]ボタン押下時処理
        pulldownBtn(pulldown['name'], pulldown['time'], pulldown['match']);

    });
});

/***** 3. 対象商品がないメッセージを表示させる商品種別 *****/
$('.js-aging_Joven').on('click', function(){
    $('.message').show();
});
