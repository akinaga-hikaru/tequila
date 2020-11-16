/** 〜 ユーザーエージェント判定処理 〜
 */
function checkUA() {

    /* --------------- ユーザーエージェント判定 --------------- */
    let ua = navigator.userAgent.toLowerCase();

    // iPhone
    let isiPhone = (ua.indexOf('iphone') > -1);
    // iPad
    let isiPad = (ua.indexOf('ipad') > -1);
    // Android
    let isAndroid = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') > -1);
    // Android Tablet
    let isAndroidTablet = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') == -1);

    // SP
    const cond = (isiPhone || isAndroid || isAndroidTablet)

    return cond

}
export default checkUA
