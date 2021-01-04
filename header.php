<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">

	<!-- IEで常に標準モードで表示させる -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header class="header">
		<h1 class="title-div">
			<a href="#wrapper" class="title-link">
				<img src="<?php bloginfo('template_directory'); ?>/img/blogtitle.png" class="title-img" alt="ブログトップ画像">
			</a>
		</h1>
		<nav class="nav">
			<ul class="nav-ul">
				<li class="nav-li"><a href="#wrapper" class="nav-link">ホーム</a></li>
				<li class="nav-li"><a href="#about" class="nav-link">デザイン</a></li>
				<li class="nav-li"><a href="#access" class="nav-link">Web制作</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">プログラミング</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">英語</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">お問合せ</a></li>
			</ul>
        </nav>
		<div class="top-img-div">
			<div class="profile-div">
				<div class="profile-icon-div">
					<img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
				</div>
				<div class="profile-txt-div">
					<p>ご訪問ありがとうございます！Junichiro Kohariと申します。</p>
					<p>大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
					<p>このブログではIT業界で働く僕が、ITの技術や日々の業務で学んだこと、プライベートでやっている趣味に関することを発信していきます。</p>
					<p class="last-txt">詳しいプロフィールは<a href="#" class="link-to-profile">こちら</a></p>
				</div>
			</div>
		</div>
	</header>