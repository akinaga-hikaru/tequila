/**
 * 〜 [商品一覧]ボタン押下時処理（[プルダウン]なし） 〜
 * @param name string・・・[項目選択]名
 * @param match string・・・表示させるクラス抽出の正規表現
 */
export default function listBtn(name, match){

    // クリック時の処理
    $('.js-' + name + '-list').click(function(){

        // 1. クリックしたリストのみのテキストを取得し、タイトル(h3)のテキストを変更
        let text =  $(this).text();
        $('.js-syouhin-title').text(text);

        // 2. 選択中のリストのCSS指定
        $('.js-btn--list').find('a').css({ background: "none" });
        $(this).find('a:hover').css({ background: "rgba(255,165,0,0.5)" });

        // 3. クリックしたリストのみのjs-〜のクラス名を取得
        let js_class = $(this).attr('class').match(match);
        let show_class = '.' + js_class + '_';

        // 4. クリックしたリストの商品コンテナのみを表示する
        $('.js-syouhin-container').hide();
        $('.message').hide();
        $(show_class).slideDown(1000);

    });

};
