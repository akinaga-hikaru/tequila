/** 〜 クリックしたリストのクラス名（js-〜）を取得する処理 〜
 * @param clickElement this・・・クリックした要素
 * @param match string・・・マッチさせる正規表現
 */
function getClickClass(clickElement, match) {

    // クリックしたリストのみのjs-〜のクラス名を取得
    const js_class = $(clickElement).attr('class').match(match);
    return  '.' + js_class + '_';

}
export default getClickClass
