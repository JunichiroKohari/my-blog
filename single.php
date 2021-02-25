<?php get_header(); ?>

<div class="contents">
	<div class="main-and-aside">
		<main class="main">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="eyecatch-div">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>
			<h2 class="article-title"><?php the_title(); ?></h1>
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
			<article class="article">
				<?php the_content(); ?>
			</article>
			<?php the_post_navigation( array(
				'screen_reader_text'=>' ',
				'prev_text' => '前の記事：%title',
				'next_text' => '次の記事：%title',
			) ); ?>
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();
