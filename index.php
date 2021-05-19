<?php get_header(); ?>

<?php get_template_part( 'popular-article-list' ); ?>
<div class="ad-placeholder">広告</div>
<main>
    <?php get_template_part( 'new-article-list' ); ?>
</main>

<?php get_footer(); ?>