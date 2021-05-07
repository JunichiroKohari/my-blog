<?php
require_once '../../../wp-load.php';

// 何記事目から（$offset）何記事目まで（$posts_per_page）読み込む
$offset         = isset( $_POST['post_num_now'] ) ? $_POST['post_num_now'] : 1;
$posts_per_page = isset( $_POST['post_num_add'] ) ? $_POST['post_num_add'] : 0;
$taxonomy = isset( $_POST['taxonomy'] ) && $_POST['taxonomy'] !== '' ? explode(',', $_POST['taxonomy']) : '';
$debug = '';
if ($taxonomy === '') {
    $ajax_query = new WP_Query(
      array(
        'post_type'      => 'products',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'offset'         => $offset,
      )
    );
} else {
    $debug = $taxonomy;
    $ajax_query = new WP_Query(
        array(
          'post_type'      => 'products',
          'post_status'    => 'publish',
          'posts_per_page' => $posts_per_page,
          'offset'         => $offset,
          'tax_query' => array(
              array(
                  'taxonomy' => $taxonomy[0],               // タクソノミーを指定
                  'field' => 'slug',
                  'terms' => array( $taxonomy[1] ),   // ターム(文字列かIDを指定)
                  'include_children' => true,          // 階層を持つタクソノミーの場合に、子孫タクソノミーを含めるかどうか
              ),
          ),
        )
    );
}

// 追加するhtml
$html = '';
// 追加する記事数
$article_count = 0;
?>
    <?php // 追加する記事分、html生成
        if ( $ajax_query->have_posts() ) :  while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
            $classes = array('sp-version-article');
                $html .= '<article id="post-'. $post->ID.'" class="products" >';
                $html .= '<a href="'.esc_url( get_permalink() ). '" class="thumbnail-link">';
            if (has_post_thumbnail()) : get_the_post_thumbnail( 'medium' );
                $html .= '<img src="'.esc_url( get_the_post_thumbnail_url( $post->ID, 'medium' ) ). '" alt="制作物" class="product-image">';
            else:
                $html .= '<img src="'.esc_url( get_template_directory_uri(). '/img/no-image.png' ).'" alt="サムネイル画像なし" class="product-image">';
            endif;
                $html .= '</a>';
                $html .= '<h2 class="product-title"><a href="'.get_permalink().'" class="product-title-link">'.$post->post_title. '</a></h2>';
                $html .= '<div class="taxonomy-div">';
                    $html .= get_the_term_list( $post->ID, 'product_type', '<span class="taxonomy product-type">#', '</span><span class="taxonomy product-type">#','</span>' );
                    $html .= get_the_term_list( $post->ID, 'customer_type', '<span class="taxonomy customer-type">#', '</span><span class="taxonomy customer-type">#','</span>' );
                    $html .= get_the_term_list( $post->ID, 'characteristics', '<span class="taxonomy characteristics">#', '</span><span class="taxonomy characteristics">#','</span>' );
                $html .= '</div>';
            $html .= '</article>';
            $article_count++;
        endwhile; endif;
    ?>
<?php
wp_reset_postdata();

// 処理結果を画面に戻す
$result = array('html'=>$html, 'article_count'=>$article_count, 'taxonomy'=>$debug);
echo json_encode( $result );
