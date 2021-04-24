/* ハンバーガーメニュー */
$('.hamb-button').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});
$('.nav-link').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});

if (document.URL.match(/profile/)) {
   $('.top-img-div')
} else {
    // 上記の場合以外の時に行う処理を記述する
}

/* コメント欄 */
// コメント欄名前必須チェック
$('#submit').attr('required', true);

/* スライダー */
// $('.slider').slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 3
// });
