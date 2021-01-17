/* ハンバーガーメニュー */
$('.hamb-button').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});
$('.nav-link').on('click', function() {
    $('.hamb-button').toggleClass('close-button');
    $('.nav').toggleClass('hamb-nav');
});

/* スライダー */
$('.slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
