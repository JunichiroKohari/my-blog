/* ハンバーガーメニュー */
$('.hamb-button').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});
$('.nav-link').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
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
