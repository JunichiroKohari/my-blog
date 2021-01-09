<?php get_header(); ?>

<div class="contents">
    <div class="popular-articles">
        <h2 class="popular-article-heading">👑 人気記事　👑</h2>
        <ul id="main-slider" class="slider">
            <?php
                // views post metaで記事のPV情報を取得する
                setPostViews(get_the_ID());
                $args = array(
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => 5 // ← 5件取得
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
                    <p>
                        <?php the_title(); ?>
                    </p>
                    <?php echo getPostViews(get_the_ID()); // 記事閲覧回数表示 ?>
                </li>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </ul>
    </div>
    <div class="ad-placeholder">広告</div>
    <div class="main-and-aside">
        <main class="main">
            <?php if (have_posts()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="new-articles">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                        <div class="article-left-div">
                            <a href="<?php the_permalink(); ?>" class="thumbnail-link">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail( 'medium' ) ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="サムネイル画像なし" class="wp-post-image">
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
                                <p><a href="<?php the_permalink(); ?>" class="to-article-link">[続きを読む]</a></p>
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
