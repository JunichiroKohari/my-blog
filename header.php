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
<div id="#wrapper">
	<header class="header">
		<div class="title-div">
			<img src="<?php bloginfo('template_directory'); ?>/img/blogtitle.png" class="header-img1" alt="ブログトップ画像">
		</div>
		<nav class="nav">
			<ul class="nav-ul">
				<li class="nav-li"><a href="#wrapper" class="nav-link">ホーム</a></li>
				<li class="nav-li"><a href="#about" class="nav-link">デザイン</a></li>
				<li class="nav-li"><a href="#access" class="nav-link">Web制作</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">プログラミング</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">英語</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">映画</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">旅行</a></li>
				<li class="nav-li"><a href="#contact" class="nav-link">お問い合わせ</a></li>
			</ul>
        </nav>
		<div class="top-img-div">
			<div class="profile-div">
				<div class="profile-icon-div">
					<img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
				</div>
				<div class="profile-txt-div">
					<p>ご訪問ありがとうございます!Junichiro Kohariと申します。</p>
					<p>大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
					<p>このブログではIT業界で働く僕が、ITの技術や日々の業務で学んだこと、プライベートでやっている趣味に関することを発信していきます。</p>
				</div>
			</div>
		</div>
	</header>