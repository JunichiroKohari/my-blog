<?php get_header(); ?>

<div class="main-and-aside margin-from-header">
	<main class="main">
		<h2 class="archive-title"><?php the_archive_title() ?></h2>
	    <?php get_template_part( 'article-list' ); ?>
	</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer();
