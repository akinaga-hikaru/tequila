/** 〜 サイドリストホバー時のCSSを設定する処理 〜
 * @param clickElement this・・・クリックした要素
 * @param btnType string・・・ボタン種別
 * @param css object・・・適用させるCSS設定
 */
function addCSS(clickElement, btnType, css) {

    // リストホバー時のCSS設定
    $(btnType).find('a').css({ background: "none" });
    $(clickElement).find('a:hover').css(css);

}
export default addCSS
