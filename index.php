<?php get_header(); ?>

<div class="contents">
    <div class="popular-articles">
        <h2 class="popular-article-heading">👑 人気記事　👑</h2>
    </div>
    <div class="ad-placeholder">広告</div>
    <div class="main-and-aside">
        <main class="main">
            <?php if (have_posts()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="new-articles">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                        <div class="article-left-div">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail( 'medium' ) ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="article-right-div">
                            <h2 class="article-title"><a href="<?php the_permalink(); ?>" class="article-title-link"><?php the_title(); ?></a></h2>
                            <div class="article-metainfo">
                                <time class="postedtime" datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y年m月d日'); ?>
                                </time>
                                <?php the_category(); ?>
                            </div>
                            <div class="post-description">
                                <?php the_excerpt(); ?>
                                <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
                <?php
                    if( function_exists('pagenation') ){
                        pagenation();
                }?>
            <?php endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>
