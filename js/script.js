/* ハンバーガーメニュー */
$('.hamb-button').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});
$('.nav-link').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});

/* よくある質問ページ */
// 質問カテゴリのテキストが空の場合、要素非表示
var quetion_category = $('.faq-section').children('.question-category');
$.each (quetion_category, function (i, val) {
    if (val !== null &&　$(val).text() == '') {
        $(val).css('display', 'none');
    } else {
        $(val).prev().css('border-bottom', 'none');
    }
});

/* お問い合わせページ */
// 送信ボタン押下時、メッセージ表示
$('.submit').modaal({
    type: 'confirm',
    confirm_button_text: 'OK',
    confirm_cancel_button_text: '',
    confirm_title: 'お問い合わせいただきありがとうございます！',
    confirm_content: '<p>3営業日以内に回答いたします。</p>',
});

/* コメント欄 */
// コメント欄名前必須チェック
$('#submit').attr('required', true);

/* スライダー */
// $('.slider').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 3
// });
