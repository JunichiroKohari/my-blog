<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">お問い合わせ</h2>
    <section class="contact-section">
        <p class="contact-info">当サイトをご覧いただきありがとうございます。</p>
        <p class="contact-info">ご相談やお問い合わせはこちらからお願いいたします。</p>
        <p class="contact-info">３営業日以内に返信させていただきます。</p>
        <p class="contact-info">よくある質問は<a href="<?php echo esc_url(get_page_link( 103 )) ?>" class="link-to-profile">こちら</a></p>
        <form action="#" class="contact-form">
            <div class="input-item">
                <span class="required">必須</span>
                <label class="contact-label">お名前</label>
                <input type="text" class="contact-input" placeholder="田中　太郎" required>
            </div>
            <div class="input-item">
                <span class="required">必須</span>
                <label class="contact-label">メールアドレス</label>
                <input type="email" class="contact-input" placeholder="hoge@huga.com" required>
            </div>
            <div class="input-item dropdown-div">
                <span class="not-required">任意</span>
                <label class="contact-label">お問い合わせ要件</label>
                <select name="contact-dropdown" class="contact-input" >
                    <option value="0"></option>
                    <option value="1">Webサイト制作(WordPress)ご依頼</option>
                    <option value="2">Webサイト制作ご依頼</option>
                    <option value="3">LPサイト制作ご依頼</option>
                    <option value="4">その他</option>
                </select>
            </div>
            <div class="input-item">
                <span class="required">必須</span>
                <label class="contact-label">メッセージ</label>
                <textarea name="contact-txt" class="contact-input contact-txt" placeholder="ご気軽にご入力ください。" required></textarea>
            </div>
            <div class="input-item checkbox-div">
                <input id="check" name="check" type="checkbox" class="checkbox" />
                <label for="check" class="checkbox-label"></label>
                <a href="<?php echo esc_url(get_page_link( 75 )) ?>" class="link-to-profile">プライバシーポリシー</a>に同意する
            </div>
            <div class="input-item btn-div">
                <button class="submit" onclick="void(0);">送信</button>
            </div>
        </form>
    </section>
</main>

<?php get_footer();
