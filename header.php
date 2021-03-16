<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">

	<!-- IEで常に標準モードで表示させる -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/0e915d4999.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header class="header">
		<h1 class="title-div">
			<a href="<?php echo esc_url( home_url() ); ?>" class="title-link">
				<img src="<?php bloginfo('template_directory'); ?>/img/blogtitle.png" class="title-img" alt="ブログトップ画像">
			</a>
		</h1>
		<div class="hamb-button">
			<span class="border"></span>
			<span class="border"></span>
			<span class="border"></span>
		</div>
		<?php if ( has_nav_menu( 'global' ) ) : ?>
		<?php wp_nav_menu( array(
			'theme_location'  => 'global',
			'menu_id' 		  => 'header-menu',
			'container' 	  => 'nav',
			'container_class' => 'nav'
		) ); ?>
		<?php endif; ?>
		<div class="top-img-div">
			<div class="profile-div">
				<?php
					global $current_user;
					get_currentuserinfo();
				?>
				<figure class="profile-icon-div">
					<img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
					<figcaption class="my-name"><?php echo esc_html( $current_user->display_name ); ?></figcaption>
				</figure>
				<div class="profile-txt-div">
					<p>ご訪問ありがとうございます！<?php echo esc_html( $current_user->display_name ); ?>と申します。<br>大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。<br>このブログではIT業界で働く僕が、ITの技術や日々の業務で学んだこと、プライベートでやっている趣味に関することを発信していきます。</p>
					<p class="last-txt">詳しいプロフィールは<a href="#" class="link-to-profile">こちら</a></p>
				</div>
			</div>
		</div>
	</header>