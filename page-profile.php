<?php get_header(); ?>

<div class="margin-from-header">
    <h2>プロフィール</h2>
    <figure class="profile-icon-div">
        <img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
        <figcaption class="my-name"><?php echo esc_html( $current_user->display_name ); ?></figcaption>
    </figure>
    <p>ご訪問ありがとうございます!Junichiro Kohariと申します。</p>
    <p>大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
    <p class="profile-item__text-syumi">趣味は、外国人の友達とチャットをすることです。ポーランド人やウルグアイ人など、ネットで出会った友達と週末によくチャットをしています。<br>普段当たり前のようにネットでコミュニケーションを取っていますが、はるか遠く離れた所にいる人と瞬時にやりとりができるってすごいことですよね。<br>私は、ネットによって人と人とが繋がるという体験を仕事でも実現させていきたいなと思っています。</p>
    <p class="profile-item__text-contactme">ちょっとした相談やお悩み事の相談でも構いません。<br>ご気軽にご連絡ください。</p>
    <h3>開発技術</h3>
    <div>
        <dt>OS</dt>
        <dd>windows10</dd>
        <dd>mac os Catalina</dd>
    </div>
    <h3>概要</h3>
    <div>
        <dt>屋号</dt>
        <dd>xxxxx</dd>
        <dt>事業形態</dt>
        <dd>個人事業主</dd>
        <dt>所在地</dt>
        <dd>大阪府大阪市</dd>
        <dt>事業内容</dt>
        <dd>Webサイト制作/改修/保守</dd>
        <dd>LP制作</dd>
        <dd>Wordpress構築/改修</dd>
        <dd>Webデザイン/ワイヤーフレーム制作</dd>
    </div>
    <button>お問合せはこちら</button>
</div>

<?php get_footer();
