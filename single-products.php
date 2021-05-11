<?php get_header(); ?>

<main class="main-no-aside">
<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <article class="article product-article">
        <h1 class="article-title"><?php the_title(); ?></h1>
        <div class="taxonomy-div">
            <?php echo get_the_term_list( $post->ID, 'product_type', '<span class="taxonomy product-type">#','</span><span class="taxonomy product-type">#','</span>' ); ?>
            <?php echo get_the_term_list( $post->ID, 'customer_type', '<span class="taxonomy customer-type">#','</span><span class="taxonomy customer-type">#','</span>' ); ?>
            <?php echo get_the_term_list( $post->ID, 'characteristics', '<span class="taxonomy characteristics">#','</span><span class="taxonomy characteristics">#','</span>' ); ?>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
        <h2>サイトトップ画</h2>
        <div class="eyecatch-div top-figure-div">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <?php endif; ?>
        <?php
            $technologies = get_post_meta(get_the_ID(), 'technology', false);
            get_template_part( 'technologies', null, $technologies );
        ?>
        <?php the_content(); ?>
    </article>
<?php endwhile; endif; ?>
</main>

<?php get_footer();
