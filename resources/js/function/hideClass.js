/** 〜 指定した複数のクラスを非表示にする処理 〜
 * @param hide_classes array・・・非表示にしたいクラス名の配列
 */
function hideClass(hide_classes) {

    // 引数の配列のクラス名を非表示にする
    $.each(hide_classes, (index, hide_class) => {
        $(hide_class).hide();
    });

}
export default hideClass
