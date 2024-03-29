<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <?php $classes = array('new-articles', 'sp-version-article', 'news'); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
        <a href="<?php the_permalink(); ?>" class="thumbnail-link">
            <?php if (has_post_thumbnail()) : the_post_thumbnail( 'medium' ) ?>
            <?php else: ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="サムネイル画像なし" class="wp-post-image">
            <?php endif; ?>
        </a>
        <div class="article-info-div">
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
            <?php endif; ?>
        </div>
    </article>
<?php endwhile; ?>
<?php if( function_exists('pagenation') ) : pagenation(); endif; ?>
<?php endif; ?>