<?php get_header(); ?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="hero eyecatch">
			<?php the_post_thumbnail( 'easiestwp-hero' ); ?>
		</div>
	<?php endif; ?>
	<div class="contents">
		<div class="main-and-aside">
			<main class="main">
				<div class="box-generic">
					<h1 class="box-heading box-heading-article"><?php the_title(); ?></h1>
					<div class="box-content">
						<article class="entry">
							<?php the_content(); ?>
						</article>
						<div class="meta-data">
							<time class="meta meta-entry-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
							<p class="meta meta-author"><?php the_author_posts_link(); ?></p>
							<p class="meta meta-cat"><?php the_category( ', ' ); ?></p>
							<p class="meta meta-tag"><?php the_tags(); ?></p>
						</div>
						<?php the_post_navigation( array(
							'prev_text' => '前の記事：%title',
							'next_text' => '次の記事：%title',
						) ); ?>
					</div>
				</div>
			</main>
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_footer();
