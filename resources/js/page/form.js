/* -----------------------------------------------
    画面：商品登録
----------------------------------------------- */

/* --------------- データ定義 ---------------　*/
const inputFileElement = $('.form').find('input[type="file"]');

/* ---------------　実行処理 ---------------　*/
inputFileElement.on('change', function(){
    const getData = inputFileElement.prop('files')[0].name;
    inputFileElement.next('input[name="image-text"]').val(getData);
});