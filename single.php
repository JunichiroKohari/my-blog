<?php get_header(); ?>

<div class="contents">
	<div class="main-and-aside">
		<main class="main">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="eyecatch">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>
			<div class="">
				<h1 class=""><?php the_title(); ?></h1>
				<div class="">
					<article class="">
						<?php the_content(); ?>
					</article>
					<div class="meta-data">
						<time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
						<p class=""><?php the_category( ' ' ); ?></p>
						<p class=""><?php the_tags( ' ' ); ?></p>
					</div>
					<?php the_post_navigation( array(
						'prev_text' => '前の記事：%title',
						'next_text' => '次の記事：%title',
					) ); ?>
				</div>
			</div>
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();
