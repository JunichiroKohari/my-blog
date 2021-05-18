<?php
    $args = array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'posts_per_page' => 5 // 5件取得
    );

    $popular_query = new WP_Query($args);
?>
<section class="popular-articles">
    <h2 class="popular-article-heading">👑 人気記事 👑</h2>
    <div class="slider">
        <?php if ( $popular_query->have_posts() ) : while ( $popular_query->have_posts() ) : $popular_query->the_post(); ?>
            <?php $classes = array('new-articles', 'sp-version-article', 'news'); ?>
            <article id="post-<?php the_ID(); ?>" class="popular-article">
                <a href="<?php the_permalink(); ?>" class="thumbnail-link">
                    <?php if (has_post_thumbnail()) : the_post_thumbnail( 'medium' ) ?>
                    <?php else: ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="サムネイル画像なし" class="wp-post-image">
                    <?php endif; ?>
                </a>
                <div class="popular-article-info">
                    <h2 class="article-title"><a href="<?php the_permalink(); ?>" class="article-title-link"><?php the_title(); ?></a></h2>
                    <time class="postedtime" datetime="<?php the_time('Y-m-d'); ?>"><i class="fas fa-calendar-alt"></i><?php the_time('Y年m月d日'); ?></time>
                    <?php if (has_category()) : ?>
                    <span>
                        <i class="fas fa-folder-open"></i>
                        <?php the_category( ' ' ); ?>
                    </span>
                    <?php endif; ?>
                    <?php if (has_tag()) : ?>
                    <span>
                        <i class="fas fa-tag"></i>
                        <?php the_tags( ' ' ); ?>
                    </span>
                    <?php echo getPostViews(get_the_ID()); // 記事閲覧回数表示 ?>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>