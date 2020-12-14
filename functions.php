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
?>