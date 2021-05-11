<?php get_header(); ?>

<main class="main-no-aside">
	<h2 class="page-title"><?php echo the_archive_title() ?></h2>
	<div class="product-articles">
		<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
			<?php $classes = array('sp-version-article'); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
				<a href="<?php the_permalink(); ?>" class="thumbnail-link">
					<?php if (has_post_thumbnail()) : the_post_thumbnail( 'medium' ) ?>
					<?php else: ?>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.png' ); ?>" alt="サムネイル画像なし" class="wp-post-image">
					<?php endif; ?>
				</a>
				<h2 class="product-title"><a href="<?php the_permalink(); ?>" class="product-title-link"><?php the_title(); ?></a></h2>
				<div class="taxonomy-div">
					<?php echo get_the_term_list( $post->ID, 'product_type', '<span class="taxonomy product-type">#','</span><span class="taxonomy product-type">#','</span>' ); ?>
					<?php echo get_the_term_list( $post->ID, 'customer_type', '<span class="taxonomy customer-type">#','</span><span class="taxonomy customer-type">#','</span>' ); ?>
					<?php echo get_the_term_list( $post->ID, 'characteristics', '<span class="taxonomy characteristics">#','</span><span class="taxonomy characteristics">#','</span>' ); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="article-loading">loading...&#x231b;</div>
	<button id="article-more" class="article-more">もっと見る</button>
	<input type="hidden" id="posts-per-page" name="posts-per-page" value="<?php echo get_option( 'posts_per_page' ); ?>">
	<input type="hidden" id="posts-count" name="posts-counts" value="<?php echo wp_count_posts( 'products' )->publish ?>">
</main>

<?php get_footer();
