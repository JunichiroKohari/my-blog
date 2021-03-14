<?php get_header(); ?>

<div class="popular-articles">
    <h2 class="popular-article-heading">👑 人気記事 👑</h2>
    <ul class="popular-articles-ul">
        <li class="popular-article-li sp-version-article">
            <article class="popular-article">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="アイキャッチ画像" class="thumbnail-img">
                <h2 class="article-title">テスト記事</h2>
                <div class="article-metainfo">
                    <div class="time">
                        <i class="fas fa-calendar-alt"></i><time class="postedtime" datetime="2020-01-12">2020年1月12日</time>
                    </div>
                    <div class="category-div">
                        <i class="fas fa-folder-open"></i>
                        <a href="#" class="category">プログラミング</a>
                    </div>
                </div>
            </article>
        </li>
        <li class="popular-article-li  popular-article-center sp-version-article">
            <article class="popular-article">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="アイキャッチ画像" class="thumbnail-img">
                <h2 class="article-title">テスト記事</h2>
                <div class="article-metainfo">
                    <div class="time">
                        <i class="fas fa-calendar-alt"></i><time class="postedtime" datetime="2020-01-12">2020年1月12日</time>
                    </div>
                    <div class="category-div">
                        <i class="fas fa-folder-open"></i>
                        <a href="#" class="category">プログラミング</a>
                    </div>
                </div>
            </article>
        </li>
        <li class="popular-article-li popular-article-right sp-version-article">
            <article class="popular-article">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="アイキャッチ画像" class="thumbnail-img">
                <h2 class="article-title">テスト記事</h2>
                <div class="article-metainfo">
                    <div class="time">
                        <i class="fas fa-calendar-alt"></i><time class="postedtime" datetime="2020-01-12">2020年1月12日</time>
                    </div>
                    <div class="category-div">
                        <i class="fas fa-folder-open"></i>
                        <a href="#" class="category">プログラミング</a>
                    </div>
                </div>
            </article>
        </li>
    </ul>
</div><!-- popular-articles -->
<div class="ad-placeholder">広告</div>
<div class="main-and-aside">
    <main>
	    <?php get_template_part( 'article-list' ); ?>
    </main>
    <?php get_sidebar(); ?>
</div><!-- main-and-aside -->

<?php get_footer(); ?>