<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">プライバシーポリシー</h2>
    <section class="privacypolicy-section">
        <?php
            $group = SCF::get('privacypolicy');
            foreach ($group as $fields ) {
        ?>
            <h3 class="text_title"><?php echo $fields['text_title']; ?></h3>
            <p class="text_content"><?php echo $fields['text_content']; ?></p>
        <?php } ?>
    </section>
    <div class="btn-div">
        <button onclick="location.href='<?php echo esc_url(get_page_link( 89 )) ?>'" class="btn"><i class="far fa-envelope"></i>　お問合せはこちら</button>
    </div>
</main>

<?php get_footer();
