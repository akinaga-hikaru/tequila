require('./bootstrap');

// syouhin.blade.phpの処理
$('.syouhin_container').hide();
$('.syouhin_title').hide();

$('.list').click(function(){

    // クリックした.listのみのテキストを取得し、タイトルを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 選択中のリストのCSS指定
    $('.list').css({background:"url(/image/tequila/bg037.gif)"});
    $(this).css({background:"url(/image/tequila/bg005.jpg)"});

    // クリックした.listのみのjs-〜のクラス名を取得
    var rep = /js-.*/;
    var jsClass = $(this).attr('class').match(rep);
    var showClass = '.' + jsClass

    // クリックした商品コンテナのみを表示する
    $('.syouhin_container').hide();
    $(showClass).show();
    $('.syouhin_title').hide();
    $('.syouhin_title').show();


});
