/* ヘッダー */
// ハンバーガーメニュー
$('#hamb-button').on('click', function() {
    $('#hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});
$('.nav-link').on('click', function() {
    $('#hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});

/* よくある質問ページ */
// 質問カテゴリのテキストが空の場合、要素非表示
var quetion_category = $('#faq-section').children('#question-category');
$.each (quetion_category, function (i, val) {
    if (val !== null &&　$(val).text() == '') {
        $(val).css('display', 'none');
    } else {
        $(val).prev().css('border-bottom', 'none');
    }
});

/* お問い合わせページ */
$("#contact-form").validationEngine(
    'attach', {
        promptPosition: "topLeft"//エラーメッセージ位置の指定
    }
);
function sendmail() {
    var name = $('#name').val();
    var email = $('#email').val();
    var requirement = $('.requirement-option:selected').val();
    var message = $('#message').val();
    var check = $('#check').is(':checked');
    var referrer = document.referrer;
    $.ajax({
        url : 'https://junichirokohari.me/wp-content/themes/my-blog/sendmail.php',
        type: 'POST',
        dataType: 'json',
        data: { 'name' : name,
                'email' : email,
                'requirement' : requirement,
                'message' : message,
                'check' : check,
                'referrer' : referrer },
        async: false
    })
    .done( function(data){
        alert('お問い合わせいただきありがとうございます！\n3営業日以内に回答いたします!');
    })
    .fail( function(data){
        alert('送信に失敗しました。\nお手数おかけしますが、以下メールアドレスに直接ご連絡いただけますでしょうか。\njunichiro@kohari.jp');
    })
}

/* コメント欄 */
// コメント欄名前必須チェック
// $('#submit').attr('required', true);

/* スライダー */
// $('.slider').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 3
// });
