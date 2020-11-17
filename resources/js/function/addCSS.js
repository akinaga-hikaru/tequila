/** 〜 サイドリストホバー時のCSSを設定する処理 〜
 * @param clickElement this・・・クリックした要素
 * @param btnType string・・・ボタン種別
 */
function addCSS(clickElement, btnType) {

    // リストのCSS設定
    $(btnType).css({ background: "rgba(255, 255, 255, 0.8)" }); // PC
    $(clickElement).css({ background: "rgba(255, 220, 150, 0.8)" });

}
export default addCSS
