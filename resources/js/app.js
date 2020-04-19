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

// サイドメニュー表示非表示
$('.js-type-toggle').on('click', function(){
    // 項目選択ボタンの表示非表示
    $('.js-btn--type').slideToggle(500);
    // 全てのリストを非表示
    $('.js-btn--list').hide();
    $('.js-btn--down').hide();
    // テキスト表示変更
    var btn_text = $(this).text();
    if (btn_text == "項目一覧 ▼"){
        $(this).text('項目一覧 ▲');
    }else{
        $(this).text('項目一覧 ▼');
    }
});

/* -----------------------------------------------
    画面：商品紹介
----------------------------------------------- */
// 全商品コンテナを非表示
$('.js-syouhin-container').hide();
$('.js-btn--type').hide();

// 変数設定
var bg_beige = {background:"beige",color:"rgb(94,61,30)"};
var bg_orange = {background:"rgba(255,165,0,0.5)",color:"beige"};
// プルダウンのない商品一覧ボタン（list）の定義
var lists = [
    // ブランド別
    {'name': 'maker', 'time': 1000, 'match': /js-maker_[a-z-]*/},
    // 蒸留所別
    {'name': 'dest', 'time': 1000, 'match': /js-dest_[0-9-]*/},
    // 熟成度合い別
    {'name': 'aging', 'time': 750, 'match': /js-aging_[A-z-]*/},
];

// プルダウンのある商品一覧ボタン（list）の定義
var areas = [
    // 生産地方別
    {'name': {'0': 'local', '1': 'area'}, 'time': 500, 'match': {'0': 'valles', '1': /js-area_valles_[a-z-]*/}, 'hide': {'0': 'altos', '1': 'centro', '2': 'others',}},
    {'name': {'0': 'local', '1': 'area'}, 'time': 500, 'match': {'0': 'altos', '1': /js-area_altos_[a-z-]*/}, 'hide': {'0': 'valles', '1': 'centro', '2': 'others',}},
    {'name': {'0': 'local', '1': 'area'}, 'time': 500, 'match': {'0': 'centro', '1': /js-area_centro_[a-z-]*/}, 'hide': {'0': 'altos', '1': 'valles', '2': 'others',}},
    {'name': {'0': 'local', '1': 'area'}, 'time': 500, 'match': {'0': 'others', '1': /js-area_others_[a-z-]*/}, 'hide': {'0': 'altos', '1': 'centro', '2': 'valles',}},
];

// 項目選択ボタン押下時処理
function sortBtn(name, time){
    $('.js-'+name+'-type').click(function(){
        // 選択中のリストのCSS指定
        $('.js-btn--type').find('a').css({background:"none"});
        $(this).find('a').css(bg_orange);
        // クリックしたリストのみを表示する
        $('.error-message').hide();
        $('.js-btn--list').hide();
        $('.js-btn--down').hide();
        $('.js-'+name+'-list').slideToggle(time);
    });
};
$.each(lists, function(index, list){
    sortBtn(list['name'], list['time']);
});
sortBtn(areas[0]['name'][0], areas[0]['time']);

// 商品一覧ボタン押下時処理
function listBtn(name, match){
    $('.js-'+name+'-list').click(function(){
        // クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        var text =  $(this).text();
        $('.js-syouhin-title').text(text);
        // 選択中のリストのCSS指定
        $('.js-btn--list').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});
        // クリックしたリストのみのjs-〜のクラス名を取得
        var js_class = $(this).attr('class').match(match);
        var show_class = '.' + js_class + '_';
        // クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.error-message').hide();
        $(show_class).slideDown(1000);
    });
};
$.each(lists, function(index, list){
    listBtn(list['name'], list['match']);
});
// エラーを表示させる商品
$('.js-aging_Hoben').on('click', function(){
    $('.error-message').show();
});

// プルダウンボタン付き商品一覧ボタン押下時処理
function listBtnWithDown(name, time, match, hide){
    $('.js-'+name[0]+'_'+match).click(function(){
        // 対象のエリアのリストを表示
        $('.js-'+name[1]+'_'+hide[0]).hide();
        $('.js-'+name[1]+'_'+hide[1]).hide();
        $('.js-'+name[1]+'_'+hide[2]).hide();
        // クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        var text =  $(this).text();
        $('.js-syouhin-title').text(text);
        // 選択中のリストのCSS指定
        $('.js-btn--list').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});
        // クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.error-message').hide();
        $('.js-'+name[1]+'_'+match).slideDown(time);
        $('.js-'+name[0]+'_'+match+'_').slideDown(time);
    });
};
$.each(areas, function(index, list){
    listBtnWithDown(list['name'], list['time'], list['match'][0], list['hide']);
});

// プルダウン押下時処理
function DownBtn(name, time, match, hide){
    $('.js-'+name[1]+'_'+match[0]).click(function(){
        // 対象のエリアのリストを表示
        $('.js-'+name[1]+'_'+hide[0]).hide();
        $('.js-'+name[1]+'_'+hide[1]).hide();
        $('.js-'+name[1]+'_'+hide[2]).hide();
        // クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        var text =  $(this).text();
        $('.js-syouhin-title').text(text);
        // 選択中のリストのCSS指定
        $('.js-btn--down').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});
        // クリックしたリストのみのjs-〜のクラス名を取得
        var js_class = $(this).attr('class').match(match[1]);
        var show_class = '.' + js_class + '_';
        // クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.error-message').hide();
        $(show_class).slideDown(time);
    });
};
$.each(areas, function(index, list){
    DownBtn(list['name'], list['time'], list['match'], list['hide']);
});

