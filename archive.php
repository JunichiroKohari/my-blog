<?php get_header(); ?>

<div class="contents">
	<div class="main-and-aside margin-from-header">
		<main class="main">
			<div class="archive-title"><h2><?php the_archive_title() ?></h2></div>
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
	</div>
</div>

<?php get_footer();
