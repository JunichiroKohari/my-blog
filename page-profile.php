<?php get_header(); ?>

<main class="margin-from-header">
    <h2 class="profile-title">プロフィール</h2>
    <figure class="profile-icon-div">
        <img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
        <figcaption class="my-name"><?php echo esc_html( $current_user->display_name ); ?></figcaption>
    </figure>
    <p>ご訪問ありがとうございます!Junichiro Kohariと申します。</p>
    <p>大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
    <p class="profile-item__text-syumi">趣味は、外国人の友達とチャットをすることです。ポーランド人やウルグアイ人など、ネットで出会った友達と週末によくチャットをしています。<br>普段当たり前のようにネットでコミュニケーションを取っていますが、はるか遠く離れた所にいる人と瞬時にやりとりができるってすごいことですよね。<br>私は、ネットによって人と人とが繋がるという体験を仕事でも実現させていきたいなと思っています。</p>
    <p class="profile-item__text-contactme">ちょっとした相談やお悩み事の相談でも構いません。<br>ご気軽にご連絡ください。</p>
    <h3 class="technologies-title">開発技術</h3>
    <div class="technology-div">
        <dl class="technology-dl">
            <dt class="technology-dt">OS</dt>
            <dd class="technology-dd"><span>windows10</span></dd>
            <dd class="technology-dd"><span>mac os Catalina</span></dd>
        </dl>
        <dl class="technology-dl">
            <dt class="technology-dt">デザインツール</dt>
            <dd class="technology-dd"><span>Adobe XD</span></dd>
            <dd class="technology-dd"><span>Adobe Photoshop</span></dd>
        </dl>
        <dl class="technology-dl">
            <dt class="technology-dt">開発ツール</dt>
            <dd class="technology-dd"><span>Visual Studio Code</span></dd>
            <dd class="technology-dd"><span>mac os Catalina</span></dd>
        </dl>
        <dl class="technology-dl">
            <dt class="technology-dt">開発言語</dt>
            <dd class="technology-dd"><span>HTML5</span></dd>
            <dd class="technology-dd"><span>CSS3</span></dd>
            <dd class="technology-dd"><span>Sass</span></dd>
            <dd class="technology-dd"><span>Less</span></dd>
            <dd class="technology-dd"><span>PHP</span></dd>
            <dd class="technology-dd"><span>JavaScript</span></dd>
        </dl>
        <dl class="technology-dl">
            <dt class="technology-dt">サーバー</dt>
            <dd class="technology-dd"><span>各社レンタルサーバ</span></dd>
            <dd class="technology-dd"><span>AWS</span></dd>
        </dl>
    </div>
    <h3 class="about-title">概要</h3>
    <div class="about-div">
        <dl class="about-dl">
            <dt class="about-dt">屋号</dt>
            <dd class="about-dd"><span>xxxxx</span></dd>
        </dl>
        <dl class="about-dl">
            <dt class="about-dt">事業形態</dt>
            <dd class="about-dd"><span>個人事業</span></dd>
        </dl>
        <dl class="about-dl">
            <dt class="about-dt">所在地</dt>
            <dd class="about-dd"><span>大阪府大阪市</span></dd>
        </dl>
        <dl class="about-dl">
            <dt class="about-dt">事業内容</dt>
            <dd class="about-dd"><span>Webサイト制作/改修/保守</span></dd>
            <dd class="about-dd"><span>LP制作</span></dd>
            <dd class="about-dd"><span>Wordpress構築/改修</span></dd>
            <dd class="about-dd"><span>Webデザイン/ワイヤーフレーム制作</span></dd>
        </dl>
    </div>
    <button class="contact-btn">お問合せはこちら</button>
</main>

<?php get_footer();
