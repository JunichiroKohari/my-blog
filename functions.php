<?php
    // css, javascript 読み込み
    function add_assets() {
        /* css */
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
