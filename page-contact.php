<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">お問い合わせ</h2>
    <section class="contact-section">
        <p class="contact-info">当サイトをご覧いただきありがとうございます。</p>
        <p class="contact-info">ご相談やお問い合わせはこちらからお願いいたします。</p>
        <p class="contact-info">３営業日以内に返信させていただきます。</p>
        <p class="contact-info">よくある質問は<a href="<?php echo esc_url(get_page_link( 103 )) ?>" class="link-to-profile">こちら</a></p>
        <form method="POST" id="contact-form" class="contact-form">
            <div class="input-item">
                <label class="contact-label required"><span class="contact-label-text">お名前</span></label>
                <input id="name" type="text" class="contact-input validate[required,maxSize[30]]" placeholder="田中　太郎" >
            </div>
            <div class="input-item">
                <label class="contact-label required"><span class="contact-label-text">メールアドレス</span></label>
                <input id="email" type="email" class="contact-input validate[required,custom[email]]" placeholder="hoge@huga.com" >
            </div>
            <div class="input-item">
                <label class="contact-label required"><span class="contact-label-text">メールアドレス（確認用）</span></label>
                <input id="email-for-confirmation" type="email" class="contact-input validate[required,equals[email]]" placeholder="hoge@huga.com" >
            </div>
            <div class="input-item dropdown-div">
                <label class="contact-label not-required"><span class="contact-label-text">お問い合わせご用件</span></label>
                <select id="requirement" name="contact-dropdown" class="contact-input" >
                    <option class="requirement-option" value="ご用件選択なし"></option>
                    <option class="requirement-option" value="Webサイト制作(WordPress)ご依頼">Webサイト制作(WordPress)ご依頼</option>
                    <option class="requirement-option" value="Webサイト制作ご依頼">Webサイト制作ご依頼</option>
                    <option class="requirement-option" value="LPサイト制作ご依頼">LPサイト制作ご依頼</option>
                    <option class="requirement-option" value="その他">その他</option>
                </select>
            </div>
            <div class="input-item">
                <label class="contact-label required"><span class="contact-label-text">メッセージ</span></label>
                <textarea id="message" name="contact-txt" class="contact-input contact-txt validate[required,maxSize[1000]]" placeholder="ご気軽にご入力ください。" ></textarea>
            </div>
            <div class="input-item checkbox-div">
                <input id="check" name="check" type="checkbox" class="checkbox validate[required]" />
                <label for="check" class="checkbox-label"></label>
                <a href="<?php echo esc_url(get_page_link( 75 )) ?>" class="link-to-profile">プライバシーポリシー</a>に同意する
            </div>
            <div class="input-item btn-div">
                <button id="submit" class="submit" onclick="">送信</button>
            </div>
            <input id="referrer" type="hidden" name="referrer">
        </form>
    </section>
</main>

<?php get_footer();
