<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">よくある質問</h2>
    <section id="faq-section" class="faq-section">
        <?php
            $group = SCF::get('faq');
            foreach ($group as $fields ) {
        ?>
            <h3 id="question-category" class="question-category"><?php echo $fields['category']; ?></h3>
            <dl class="faq-pair">
                <dt class="faq question">
                    <img src="<?php bloginfo('template_directory'); ?>/img/question.png" class="faq-icon-img" alt="Qマーク">
                    <p><?php echo $fields['question']; ?></p>
                </dt>
                <dd class="faq answer">
                    <img src="<?php bloginfo('template_directory'); ?>/img/answer.png" class="faq-icon-img" alt="Aマーク">
                    <?php echo $fields['answer']; ?>
                </dd>
            </dl>
        <?php } ?>
    </section>
    <div class="btn-div">
        <button onclick="location.href='<?php echo esc_url(get_page_link( 89 )) ?>'" class="btn"><i class="far fa-envelope"></i>　お問合せはこちら</button>
    </div>
</main>

<?php get_footer();
