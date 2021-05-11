<?php get_header(); ?>

<main class="main-no-aside">
    <h1 class="page-title">プロフィール</h1>
    <figure class="profile-icon-div">
        <img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
        <figcaption class="my-name"><?php echo esc_html( $current_user->display_name ); ?></figcaption>
    </figure>
    <p class="profile-txt">ご訪問ありがとうございます!Junichiro Kohariと申します。</p>
    <p class="profile-txt">大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
    <p class="profile-txt">趣味は、外国人の友達とチャットをすることです。ポーランド人やウルグアイ人など、ネットで出会った友達と週末によくチャットをしています。普段当たり前のようにネットでコミュニケーションを取っていますが、はるか遠く離れた所にいる人と瞬時にやりとりができるってすごいことですよね。私は、ネットによって人と人とが繋がるという体験を仕事でも実現させていきたいなと思っています。</p>
    <p class="profile-txt">ちょっとした相談やお悩み事の相談でも構いません。ご気軽にご連絡ください。</p>
    <?php
        $technologies = get_post_meta(get_the_ID(), 'technology', false);
        get_template_part( 'technologies', null, $technologies );
    ?>
    <section class="profile-section about">
        <h2 class="section-title">概要</h2>
        <dl class="profile-dl">
            <dt class="profile-dt">屋号</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span>xxxxx</span>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">事業形態</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span>個人事業</span>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">所在地</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span>大阪府大阪市</span>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">事業内容</dt>
            <dd class="profile-dd">
                <ul class="business-ul">
                    <li class="business-li">Webサイト制作/改修/保守</li>
                    <li class="business-li">LP制作</li>
                    <li class="business-li">Wordpress構築/改修</li>
                    <li class="business-li">Webデザイン/ワイヤーフレーム制作</li>
                </ul>
            </dd>
        </dl>
    </section>
    <div class="btn-div">
        <button onclick="location.href='<?php echo esc_url(get_page_link( 89 )) ?>'" class="btn"><i class="far fa-envelope"></i>　お問合せはこちら</button>
    </div>
</main>

<?php get_footer();
