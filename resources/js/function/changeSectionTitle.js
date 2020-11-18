/** 〜 セクションタイトルのテキストを変更する処理 〜
 * @param clickElement this・・・クリックした要素
 */
function changeSectionTitle(clickElement) {

    // クリックした要素のテキストを取得
    const text =  $(clickElement)[0].innerText;

    // 取得したテキストを改行で分割
    const split_text = text.split('\n')

    // メインとサブのテキストをそれぞれ変更
    $(js.syouhin_title).find(js.section_text_main).text(split_text[0]);
    if(split_text[1]) {
        $(js.syouhin_title).find(js.section_text_sub).text(split_text[1]);
    } else {
        $(js.syouhin_title).find(js.section_text_sub).text('');
    }

}
export default changeSectionTitle
