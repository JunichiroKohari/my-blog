<?php get_header(); ?>

<div class="contents">
    <div class="popular-articles">
        <h2 class="popular-article-heading">👑 人気記事　👑</h2>
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
        <main class="main">
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <div class="new-articles sp-version-article">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                        <div class="article-left-div">
                            <a href="<?php the_permalink(); ?>" class="thumbnail-link">
                                <?php if (has_post_thumbnail()) : the_post_thumbnail( 'medium' ) ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="サムネイル画像なし" class="wp-post-image">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="article-right-div">
                            <h2 class="article-title"><a href="<?php the_permalink(); ?>" class="article-title-link"><?php the_title(); ?></a></h2>
                            <div class="article-metainfo">
                                <div class="time-div">
                                    <i class="fas fa-calendar-alt"></i>
                                    <time class="postedtime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                </div>
                                <div class="cat-and-tag-div">
                                    <i class="fas fa-folder-open"></i>
                                    <?php the_category( ' ' ); ?>
                                    <i class="fas fa-tag"></i>
                                    <?php the_tags( ' ' ); ?>
                                </div>
                            </div>
                            <div class="post-description">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
                <?php if( function_exists('pagenation') ) : pagenation(); endif; ?>
            <?php endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div><!-- main-and-aside -->
</div><!-- contents -->

<?php get_footer(); ?>