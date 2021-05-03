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
$("#contact-form").submit(function(){
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
                'referrer' : referrer }
    })
    .done( function(data){
        alert('success!');
        alert(data.errflg);
        alert(data.dispmsg);
    })
    .fail( function(data){
        alert('failed');
    })
    return false;
});
// 送信ボタン押下時、メッセージ表示
var modaalObj = {
    type: 'confirm',
    confirm_button_text: 'OK',
    confirm_cancel_button_text: '',
    confirm_title: 'お問い合わせいただきありがとうございます！',
    confirm_content: '<p>3営業日以内に回答いたします。</p>',
    // before_open: errorCheck,
    should_open: true,
};
$('#submit').on('click', function () {
    // errorCheck();
    // if ($('#name').val() !== '' && $('#email').val() !== '' && $('#message').val() !== '') {
    //     if (!$('#check').prop('checked')) {
    //         alert('プライバシーポリシーをご確認いただき、チェックボックスにチェックを入れて下さい。');
    //     } else {
    //         $('#submit').modaal(modaalObj);
    //     }
    // }
})
// 必須項目入力チェック
// function errorCheck() {
//     if ($('#name').val() == '' || $('#email').val() == '' || $('#message').val() == '') {
//         alert('お名前、メールアドレス、メッセージは入力必須項目です。');
//         modaalObj.should_open = false;
//     } else if (!$('#check').prop('checked')) {
//         alert('プライバシーポリシーをご確認いただき、チェックボックスにチェックを入れて下さい。');
//         modaalObj.should_open = false;
//     } else {
//         modaalObj.should_open = true;
//     }
// }

/* コメント欄 */
// コメント欄名前必須チェック
// $('#submit').attr('required', true);

/* スライダー */
// $('.slider').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 3
// });
