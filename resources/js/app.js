require('./bootstrap');

/* -----------------------------------------------
    画面共通処理
----------------------------------------------- */
// SPのグローバルメニューのリスト表示非表示
$(function() {
    $('.js-global-menu__btn-sp').on('click', function(){
        $('.js-global-menu').slideToggle();
    });
});


/* -----------------------------------------------
    画面：テキーラとは
----------------------------------------------- */
// サイドメニュー表示非表示
$(function() {
    $('.js-side-btn--open').on('click', function(){
        $('.js-side-list').slideToggle();
        var text = $(this).text();
        if(text == '項目一覧 ▼') {
            $(this).text('項目一覧 ▲');
        }else{
            $(this).text('項目一覧 ▼');
        }
    });
});


/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
// 全商品コンテナを非表示
$('.syouhin-container').hide();
$('.list-btn--syouhin-type').hide();

// 変数設定
var bg_beige = {background:"beige",color:"rgb(94,61,30)"};
var bg_orange = {background:"rgba(255,165,0,0.5)",color:"beige"};
var lists = [
    // ブランド別
    {'name': 'maker', 'time': 1000, 'match': /js-maker_[a-z -]*/},
    // 蒸留所別
    {'name': 'dest', 'time': 1000, 'match': /js-dest_[0-9 -]*/},
    // 生産地方別
    {'name': 'local', 'time': 500, 'match': /js-local_[a-z  -]*/},
    // 熟成度合い別
    {'name': 'aging', 'time': 750, 'match': /js-aging_[A-z -]*/},
];


$('.js-list-toggle').click(function(){
    // 種別ボタンの表示非表示
    $('.list-btn--syouhin-type').slideToggle(500);
    // 全てのリストを非表示
    $('.js-list').hide();
    // テキスト表示変更
    var btn_text = $(this).text();
    if (btn_text == "ボタンを表示 ▼"){
        $('.js-list-toggle').text('ボタンを非表示 ▲');
    }else{
        $('.js-list-toggle').text('ボタンを表示 ▼');
    }
});

// 種別ボタン押下時処理
function sortBtn(name, time){
    $('.'+name+'-list').click(function(){
        // 選択中のリストのCSS指定
        $('.list-btn--syouhin-type').css(bg_beige);
        $(this).css(bg_orange);
        // クリックしたリストのみを表示する
        $('.js-list').hide();
        $('.js-'+name+'-list').slideToggle(time);
    });
};
$.each(lists, function(index, list){
    sortBtn(list['name'], list['time']);
});

// 商品一覧ボタン押下時処理
function listBtn(name, match){
    $('.js-'+name+'-list').click(function(){
        // クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        var text =  $(this).text();
        $('.js-syouhin-title').text(text);
        // 選択中のリストのCSS指定
        $('.js-list').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});
        // クリックしたリストのみのjs-〜のクラス名を取得
        var js_class = $(this).attr('class').match(match);
        var show_class = '.' + js_class
        // クリックしたリストの商品コンテナのみを表示する
        $('.syouhin-container').hide();
        $(show_class).fadeIn(1000);
        $('.js-syouhin-title').hide();
        $('.js-syouhin-title').show();
    });
};
$.each(lists, function(index, list){
    listBtn(list['name'], list['match']);
});
