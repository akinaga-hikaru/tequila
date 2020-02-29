require('./bootstrap');

// syouhin.blade.phpの処理
$('.syouhin_container').hide();
$('.syouhin_title').hide();

$('.js-maker-list').click(function(){

    // クリックした.listのみのテキストを取得し、タイトルを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 選択中のリストのCSS指定
    $('.list').css({background:"url(/image/tequila/bg037.gif)"});
    $(this).css({background:"url(/image/tequila/bg005.jpg)"});

    // クリックした.listのみのjs-〜のクラス名を取得
    var rep = /js-title_.*/;
    var jsClass = $(this).attr('class').match(rep);
    var showClass = '.' + jsClass

    // クリックした商品コンテナのみを表示する
    $('.syouhin_container').hide();
    $(showClass).show();
    $('.syouhin_title').hide();
    $('.syouhin_title').show();


});
$('.js-dest-list').click(function(){

    // クリックした.listのみのテキストを取得し、タイトルを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 選択中のリストのCSS指定
    $('.list').css({background:"url(/image/tequila/bg037.gif)"});
    $(this).css({background:"url(/image/tequila/bg005.jpg)"});

    // クリックした.listのみのjs-〜のクラス名を取得
    var int = /nom.*_/;
    var jsClassInt = $(this).attr('class').match(int);
    var showClassInt = '.' + jsClassInt

    // クリックした商品コンテナのみを表示する
    $('.syouhin_container').hide();
    $(showClassInt).show();
    $('.syouhin_title').hide();
    $('.syouhin_title').show();


});
$('.maker-list').click(function(){

    // クリックした.listのみのテキストを取得し、タイトルを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // ブランド名リストのみを表示する
    $('.js-dest-list').hide();
    $('.js-maker-list').show();

});
$('.dest-list').click(function(){

    // クリックした.listのみのテキストを取得し、タイトルを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 蒸留所リストのみを表示する
    $('.js-maker-list').hide();
    $('.js-dest-list').show();

});
