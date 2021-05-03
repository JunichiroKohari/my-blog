<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">お問い合わせ</h2>
    <section class="contact-section">
        <p class="contact-info">当サイトをご覧いただきありがとうございます。</p>
        <p class="contact-info">ご相談やお問い合わせはこちらからお願いいたします。</p>
        <p class="contact-info">３営業日以内に返信させていただきます。</p>
        <p class="contact-info">よくある質問は<a href="<?php echo esc_url(get_page_link( 103 )) ?>" class="link-to-profile">こちら</a></p>
        <form id="contact-form" class="contact-form">
            <div class="input-item">
                <label class="contact-label"><span class="required">必須</span><span class="contact-label-text">お名前</span></label>
                <input id="name" type="text" class="contact-input" placeholder="田中　太郎" required>
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="input-item">
                <label class="contact-label"><span class="required">必須</span><span class="contact-label-text">メールアドレス</span></label>
                <input id="email" type="email" class="contact-input" placeholder="hoge@huga.com" required>
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="input-item dropdown-div">
                <span class="not-required">任意</span>
                <label class="contact-label">お問い合わせ要件</label>
                <select id="requirement" name="contact-dropdown" class="contact-input" >
                    <option class="requirement-option" value="0"></option>
                    <option class="requirement-option" value="1">Webサイト制作(WordPress)ご依頼</option>
                    <option class="requirement-option" value="2">Webサイト制作ご依頼</option>
                    <option class="requirement-option" value="3">LPサイト制作ご依頼</option>
                    <option class="requirement-option" value="4">その他</option>
                </select>
            </div>
            <div class="input-item">
                <label class="contact-label"><span class="required">必須</span><span class="contact-label-text">メッセージ</span><i class="fas fa-check-circle"></i></label>
                <textarea id="message" name="contact-txt" class="contact-input contact-txt" placeholder="ご気軽にご入力ください。" required></textarea>
            </div>
            <div class="input-item checkbox-div">
                <input id="check" name="check" type="checkbox" class="checkbox" required/>
                <label for="check" class="checkbox-label"></label>
                <a href="<?php echo esc_url(get_page_link( 75 )) ?>" class="link-to-profile">プライバシーポリシー</a>に同意する
            </div>
            <div class="input-item btn-div">
                <input type="submit" id="submit" class="submit" onclick="void(0);">送信</input>
                <input id="referrer" type="hidden" name="referrer">
            </div>
        </form>
    </section>
</main>

<?php get_footer();
