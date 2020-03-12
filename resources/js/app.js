require('./bootstrap');

/* -----------------------------------------------
    画面共通処理
----------------------------------------------- */
// SPのグローバルメニューのリスト表示非表示
$(function() {
    $('.js-menu-btn--open').on('click', function(){
        $('.js-global-menu-list').slideToggle();
    });
});


/* -----------------------------------------------
    画面：テキーラとは
----------------------------------------------- */
// サイドメニュー表示非表示
$(function() {
    $('.js-side-btn--open').on('click', function(){
        $('.js-side-list').slideToggle();
    });
});


/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
// 全商品コンテナを非表示
$('.syouhin-container').hide();

// ブランド別ボタン押下時処理
$('.maker-list').click(function(){

    // 選択中のリストのCSS指定
    $('.dest-list').css({background:"beige",color:"rgb(94,61,30)"});
    $(this).css({background:"url(/image/tequila/bg005.jpg)",color:"beige"});

    // ブランド名リストのみを表示する
    $('.js-dest-list').hide();
    $('.js-maker-list').slideToggle(1000);

});

// 蒸留所別ボタン押下時処理
$('.dest-list').click(function(){

    // 選択中のリストのCSS指定
    $('.maker-list').css({background:"beige",color:"rgb(94,61,30)"});
    $(this).css({background:"url(/image/tequila/bg005.jpg)",color:"beige"});

    // 蒸留所リストのみを表示する
    $('.js-maker-list').hide();
    $('.js-dest-list').slideToggle(1000);

});

// ブランド別の商品一覧を押下した時の処理
$('.js-maker-list').click(function(){

    // クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 選択中のリストのCSS指定
    $('.js-maker-list').find('a').css({background:"none"});
    $('.js-dest-list').find('a').css({background:"none"});
    $(this).find('a').css({background:"rgba(255,165,0,0.5)"});

    // クリックしたリストのみのjs-〜のクラス名を取得
    var rep = /js-title_.*/;
    var jsClass = $(this).attr('class').match(rep);
    var showClass = '.' + jsClass

    // クリックしたリストの商品コンテナのみを表示する
    $('.syouhin-container').hide();
    $(showClass).fadeIn(1000);
    $('.syouhin_title').hide();
    $('.syouhin_title').show();

});

// 蒸留所別の商品一覧を押下した時の処理
$('.js-dest-list').click(function(){

    // クリックしたリストのみのテキストを取得し、タイトル（h3）を変更
    var text =  $(this).text();
    $('.syouhin_title').text(text);

    // 選択中のリストのCSS指定
    $('.js-dest-list').find('a').css({background:"none"});
    $('.js-maker-list').find('a').css({background:"none"});
    $(this).find('a').css({background:"rgba(255,165,0,0.5)"});


    // クリックしたリストのみのjs-〜のクラス名を取得
    var int = /nom.*_/;
    var jsClassInt = $(this).attr('class').match(int);
    var showClassInt = '.' + jsClassInt

    // クリックしたリストの商品コンテナのみを表示する
    $('.syouhin-container').hide();
    $(showClassInt).fadeIn(1000);
    $('.syouhin_title').hide();
    $('.syouhin_title').show();


});

