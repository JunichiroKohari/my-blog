<?php
    // タイトル出力
    add_theme_support( 'title-tag' );

    // css, javascript 読み込み
    function add_assets() {
        /* css */
        // slick
        // wp_enqueue_style(
        //     'slick',
        //     get_theme_file_uri('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'),
        //     array(),
        //     '1.8.1'
        // );
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
        // slick
        // wp_enqueue_script(
        //     'slick',
        //     '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        //     array(),
        //     '1.8.1',
        //     true
        // );
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

    /* 人気記事一覧 */
    // 人気記事出力
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
                return "0 View";
        }
        return $count.' Views';
    }
    // 記事viewカウント
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
                $count = 0;
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
        }else{
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
?>
