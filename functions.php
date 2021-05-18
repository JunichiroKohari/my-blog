<?php
    // タイトル出力
    add_theme_support( 'title-tag' );

    // css, javascript 読み込み
    function add_assets() {
        /* css */
        // fontawesome
        wp_enqueue_style(
            'fontawesome',
            '//use.fontawesome.com/releases/v5.0.6/css/all.css',
            array(),
            '5.0.6'
        );
        // slick
        wp_enqueue_style(
            'slick',
            get_theme_file_uri('/css/slick.css'),
            array(),
            '1.8.1'
        );
        // jQuery validationEngine
        wp_enqueue_style(
            'validationEngine-css',
            get_theme_file_uri('/css/validationEngine.jquery.css'),
            array(),
            filemtime( get_theme_file_path('/css/validationEngine.jquery.css'))
        );
        // my css
        wp_enqueue_style(
            'my-style',
            get_theme_file_uri('/style.css'),
            array(),
            filemtime( get_theme_file_path('/style.css'))
        );

        /* javascript */
        // jQuery
        wp_deregister_script('jquery');
        wp_enqueue_script(
            'jquery',
            '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
            array(),
            '3.3.1',
            true
        );
        // jQuery validationEngine
        wp_enqueue_script(
            'validationEngine-js',
            get_theme_file_uri( '/js/jquery.validationEngine.js' ),
            array( 'jquery' ),
            filemtime( get_theme_file_path( '/js/jquery.validationEngine.js' ) ),
            true
        );
        // jQuery validationEngine 日本語
        wp_enqueue_script(
            'validationEngine-ja-js',
            get_theme_file_uri( '/js/jquery.validationEngine-ja.js' ),
            array( 'jquery' ),
            filemtime( get_theme_file_path( '/js/jquery.validationEngine-ja.js' ) ),
            true
        );
        // slick
        wp_enqueue_script(
            'slick',
            get_theme_file_uri( '/js/slick.min.js' ),
            array( 'jquery' ),
            '1.8.1',
            true
        );
        // my javascript
        wp_enqueue_script(
            'base-script',
            get_theme_file_uri( '/js/script.js' ),
            array( 'jquery' ),
            filemtime( get_theme_file_path( '/js/script.js' ) ),
            true
        );
    }
    add_action('wp_enqueue_scripts', 'add_assets');

    // カスタムフィールド（CSS）有効化
    function add_custom_css( $css ) {
        if ( is_singular() ) {
            if ( $custom_css = get_post_meta(get_the_ID(), 'css', true ) ) {
                $css .= $custom_css;
            }
        }
        return $css;
    }
    add_filter( 'wp_get_custom_css', 'add_custom_css' );

    // カスタムメニュー有効化
    register_nav_menus( array (
        'header' => 'ヘッダーナビゲーション',
        'footer' => 'フッターナビゲーション',
    ) );

    // ウィジェットエリアの登録
    function sampletheme_widgets_init() {
        register_sidebar( array(
            'name'  => 'サイドバー',
            'id'    => 'sidebar',
            'description' => 'サイドバーに表示するウィジェット',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ) );
    }

    add_action( 'widgets_init', 'sampletheme_widgets_init' );

    // アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );

    // カテゴリ出力形式カスタマイズ
    function user_override_the_category( $html ) {
        $html = preg_replace( '~a href="(' . esc_url( get_home_url() ) . '/category/(.+?)/)"~', 'a href="\1" class="category"', $html );
        return $html;
    }
    add_filter( 'the_category', 'user_override_the_category', 10, 1 );

    /* 人気記事一覧 */
    // 人気記事View数取得（表示するか未定）
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
                return '<span><i class="fas fa-eye"></i>0 PV</span>';
        }
        return '<span><i class="fas fa-eye"></i>' .$count. ' PV</span>';
    }
    // 記事View数カウント
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                $count = 0;
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
        } else {
                $count++;
                update_post_meta($postID, $count_key, $count);
        }
    }
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    function the_slider() {
        $args = array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'posts_per_page' => 5 // ← 5件取得
        );
        $query = new WP_Query($args);
        $html = '<ul id="main-slider" class="slider">';
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $html .= '<li>';
                $html .= '<a href="' . the_permalink() . '">';
                if(has_post_thumbnail()) {
                    $html .= the_post_thumbnail( 'post-thumbnail');
                } else {
                    $html .= '<img src="' . get_template_directory_uri() . '/assets/img/no-image.png">';
                }
                $html .= '<p class="title">' . the_title() . '</p>';
                $html .= '</a>';
                $html .= '</li>';
            endwhile;
        endif;
        $html .= '</ul>';
        return $html;
    }
    add_shortcode('mainslider', 'the_slider');

    // 「続きを読む」表示
    function new_excerpt_more($post) {
        return '  …  <a href="'. get_permalink($post->ID) . '">' . '続きを読む' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // 抜粋の p タグにclassを付与
    function add_class_excerpt ($post_excerpt) {
        $post_excerpt = '<p class="excerpt">' . $post_excerpt . '</p>';
        return $post_excerpt;
    }
    add_filter ('get_the_excerpt','add_class_excerpt');
    //　抜粋文字数設定
    function twpp_change_excerpt_length( $length ) {
        return 45;
    }
    add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

    /* ページネーション */
    function pagenation($pages = '', $range = 2){
        $showitems = ($range * 1)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == ''){
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages){
                $pages = 1;
            }
        }
        if(1 != $pages){
            // 画像を使う時用に、テーマのパスを取得
            $img_pass = get_template_directory_uri();
            echo "<div class=\"pagenation\">";
            // 「1/2」表示 現在のページ数 / 総ページ数
            // echo "<div class=\"pagenation-result\">". $paged."/". $pages."</div>";
            // 「前へ」を表示
            if($paged > 1) echo "<div class=\"pagenation-btn\"><a href='".get_pagenum_link($paged - 1)."'>＜</a></div>";
            // ページ番号を出力
            echo "<ol class=\"pagenation-ol\">\n";
            for ($i=1; $i <= $pages; $i++){
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                    echo ($paged == $i)? "<li class=\"current pagenation-btn\">".$i."</li>":
                        "<li class=\"pagenation-btn\"><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
                }
            }
            // [...] 表示
            if(($paged + 4 ) < $pages){
                echo "<li class=\"notNumbering pagenation-btn\">...</li>";
                echo "<li class=\"pagenation-btn\"><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
            }
            echo "</ol>\n";
            // 「次へ」を表示
            if($paged < $pages) echo "<div class=\"pagenation-next pagenation-btn\"><a href='".get_pagenum_link($paged + 1)."'>＞</a></div>";
            echo "</div>\n";
        }
    }

    // コメント欄のメールアドレス入力欄、サイト入力欄削除
    function my_comment_form_remove($arg) {
        unset($arg['email']);
        unset($arg['url']);
        // unset($arg['cookies']);
        return $arg;
    }
    add_filter('comment_form_default_fields', 'my_comment_form_remove');

    //コメント文言を変更
    function custom_comment_form($args) {
        $args['title_reply'] = '';
        $args['comment_notes_before'] = '';
        $args['comment_notes_after'] = '';
        $args['label_submit'] = '送信';
        return $args;
    }
    add_filter('comment_form_defaults', 'custom_comment_form');

    /* アーカイブページ */
    function my_archive_title($title) {
        if ( is_category() ) {
            $title = single_cat_title( '', false ). 'の記事一覧';
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false ). 'の記事一覧';
        } elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        } elseif (is_date()) {
            $title = get_the_time('Y年n月'). 'の記事一覧';
        }
        return $title;
    };
    add_filter( 'get_the_archive_title', 'my_archive_title');
