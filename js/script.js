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
let quetion_category = $('#faq-section').children('#question-category');
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
// 送信ボタン押下時、お問い合わせ内容をメールに送信
function sendmail() {
    let name = $('#name').val();
    let email = $('#email').val();
    let requirement = $('.requirement-option:selected').val();
    let message = $('#message').val();
    let check = $('#check').is(':checked');
    let referrer = document.referrer;
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
    .done( function(res){
        if (!res.errflg) {
            alert('お問い合わせいただきありがとうございます！\n3営業日以内に回答いたします!');
        }
    })
    .fail( function(res){
        alert('送信に失敗しました。\nお手数おかけしますが、以下メールアドレスに直接ご連絡いただけますでしょうか。\njunichiro@kohari.jp');
    })
}

/* 制作実績ページ */
// もっと見るボタン押下時、未表示の制作実績を読み込んで表示
wrappedFlexboxAlignLeft();
let postsCount = parseInt($('#posts-count').val()); // 総投稿数
let postsPerPage = parseInt($('#posts-per-page').val()); // １ページに表示する最大投稿数
let postNumNow = postsCount < postsPerPage ? postsCount : postsPerPage; // 現在表示されている投稿数
if (postNumNow === postsCount) {
    $('#article-more').addClass('is-hide');
}
let postNumAdd = postsPerPage; // 追加表示する記事数
let taxonomy = $('#taxonomy').length ? $('#taxonomy').val() : '';
let flag = false;
$('#article-more').on('click', function() {
  if (!flag) {
    $('.article-more').addClass('is-hide');
    $('.article-loading').addClass('is-show');
    flag = true;
    $.ajax({
      type: 'POST',
      url: 'https://junichirokohari.me/wp-content/themes/my-blog/ajax-item.php',
      dataType: 'json',
      data: {
        post_num_now: postNumNow,
        post_num_add: postNumAdd,
        taxonomy: taxonomy,
      }
    })
    .done( function(res) {
        $('.product-articles').append(res.html);
        $('.article-loading').removeClass('is-show');
        postNumNow += res.article_count;
        if (postNumNow < postsCount) {
            $('.article-more').removeClass('is-hide');
        }
        wrappedFlexboxAlignLeft();
        flag = false;
    })
    .fail( function(res){
        alert('記事の読み込みに失敗しました。');
        $('.article-loading').removeClass('is-show');
    })
  }
})
// 折り返されたフレックスボックスを左寄せ
function wrappedFlexboxAlignLeft() {
    let productArticles = $('.product-articles'),
        emptyArticles = [],
        i;
    productArticles.find('.is-empty').remove();
    // 子パネル (li.cell) の数だけ空の子パネル (li.cell.is-empty) を追加する。
    for (i = 0; i < productArticles.find('.products').length; i++) {
        emptyArticles.push($('<article>', { class: 'is-empty' }));
    }
    productArticles.append(emptyArticles);
}

/* 人気記事 */
$('.slider').slick({
    autoplay: true,     // 自動スクロール
    infinite: true,     // スライドをループさせるかどうか
    slidesToShow: 3,    // スライド数
    slidesToScroll: 1,  // 1回のスクロールで移動する枚数
    prevArrow: '<div class="slick-prev"></div>', // 矢印PreviewのHTML
    nextArrow: '<div class="slick-next"></div>', // 矢印NextのHTML
    dots: true,         // 下部ドットナビゲーションの表示
    responsive: [
        {
        breakpoint: 960, // ブレイクポイント769px
        settings: {
            slidesToShow: 2,   // スライド数
            slidesToScroll: 2, // 1回のスクロールで移動する枚数
        }
    },
    {
        breakpoint: 560, // ブレイクポイント426px
        settings: {
            slidesToShow: 1,   // スライド数
            slidesToScroll: 1, // 1回のスクロールで移動する枚数
        }
    }
]
});