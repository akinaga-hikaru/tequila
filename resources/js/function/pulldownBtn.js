/**
 * 〜 [プルダウン]ボタン押下時処理 〜
 * @param name['minor'] string・・・[商品一覧]名
 * @param time int・・・トグル表示の時間
 * @param match['name'] string・・・表示させる個別の[商品一覧]名
 * @param match['way'] string・・・表示させるクラス抽出の正規表現
 */
export default function pulldownBtn(name, time, match){

    // クリック時の処理
    $('.js-' + name['minor'] + '_' + match['name']).click(function(){

        // 1. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        let text =  $(this).text();
        $('.js-syouhin-title').text(text);

        // 2. 選択中のリストのCSS指定
        $('.js-btn--down').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});

        // 3. クリックしたリストのみのjs-〜のクラス名を取得
        let js_class = $(this).attr('class').match(match['way']);
        let show_class = '.' + js_class + '_';

        // 4. クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.message').hide();
        $(show_class).slideDown(time);

    });

};
