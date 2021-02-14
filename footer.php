    <footer>
        <form method="get" action="<?php bloginfo('url'); ?>" class="category-and-archive">
            <div class="dropdown-label">カテゴリ</div>
            <?php
                $args = array(
                // 初期値のプレースホルダー
                'show_option_none' => __( 'カテゴリーを選択' ),
                // 階層表示有効
                'hierarchical'     => 1,
                // 記事の件数を表示
                'show_count'       => 1,
                );
                // カテゴリーのドロップダウン
                wp_dropdown_categories($args);
            ?>
            <div class="dropdown-label">月別アーカイブ</div>
            <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;' class="postform">
                <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
            </select>
        </form>
        <ul class="footer-ul">
            <li class="footer-li"><a href="#" class="footer-link">ホーム</a></li>
            <li class="footer-li"><a href="#" class="footer-link">プロフィール</a></li>
            <li class="footer-li"><a href="#" class="footer-link">プライバシーポリシー</a></li>
            <li class="footer-li"><a href="#" class="footer-link">お問合せ</a></li>
        </ul>
        <small class="copyright">COPYRIGHT© リーダブルブログ ALL RIGHTS RESERVED.</small>
    </footer>
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
