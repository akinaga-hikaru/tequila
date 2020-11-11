/**
 * 〜 [商品一覧]ボタン押下時処理（[プルダウン]あり） 〜
 * @param name['major'] string・・・[項目選択]名
 * @param name['minor'] string・・・[商品一覧]名
 * @param time int・・・トグル表示の時間
 * @param match['name'] string・・・表示させるクラス抽出の正規表現
 * @param hide  array・・・非表示にさせたいクラス
 */
export default function listWithPullDownBtn(name, time, match, hide){

    // クリック時の処理
    $('.js-' + name['major'] + '_' + match['name']).click(function(){

        // 1. 対象のエリアのリストを非表示
        $.each(hide, function(index, item) {
            $('.js-' + name['minor'] + '_' + item).hide();
        })

        // 2. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        let text =  $(this).text();
        $('.js-syouhin-title').text(text);

        // 3. 選択中のリストのCSS指定
        $('.js-btn--list').find('a').css({background:"none"});
        $(this).find('a:hover').css({background:"rgba(255,165,0,0.5)"});

        // 4. クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.message').hide();
        $('.js-' + name['minor'] + '_' + match['name']).slideDown(time);
        $('.js-' + name['major'] + '_' + match['name'] + '_').slideDown(time);

    });

};
