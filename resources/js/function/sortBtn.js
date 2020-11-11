/**
 * 〜 [項目選択]ボタン押下時処理 〜
 * @param name string・・・[項目選択]名
 * @param time int・・・トグル表示の時間
 */
export default function sortBtn(name, time){

    // CSS定義
    const bg_orange = { background: "rgba(255,165,0,0.5)", color:"beige" };

    // クリック時の処理
    $('.js-' + name + '-type').click(function(){

        // 1. 選択中のリストのCSS指定
        $('.js-btn--type').find('a').css({background:"none"});
        $(this).find('a').css(bg_orange);

        // 2. クリックしたリストのみを表示する
        $('.message').hide();
        $('.js-btn--list').hide();
        $('.js-btn--down').hide();
        $('.js-' + name + '-list').slideToggle(time);

    });

};
