<?php if( !is_user_logged_in() ) { setPostViews( get_the_ID() ); } // 記事View数カウント ?>
<?php get_header(); ?>

<main class="main">
	<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
	<article class="article">
		<h1 class="article-title"><?php the_title(); ?></h1>
		<div class="article-meta">
			<time class="postedtime" datetime="<?php the_time('Y-m-d'); ?>"><i class="fas fa-calendar-alt"></i><?php the_time('Y年m月d日'); ?></time>
			<span>
				<i class="fas fa-folder-open"></i>
				<?php the_category( ' ' ); ?>
			</span>
			<span>
				<i class="fas fa-tag"></i>
				<?php the_tags( ' ' ); ?>
			</span>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="eyecatch-div">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
			<?php endif; ?>
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
<?php endwhile; endif; ?>
</main>

<?php get_footer();
