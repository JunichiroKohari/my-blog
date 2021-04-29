<?php get_header(); ?>

<main class="main-no-aside">
    <h2 class="page-title">プロフィール</h2>
    <figure class="profile-icon-div">
        <img src="<?php bloginfo('template_directory'); ?>/img/profile-icon.png" class="profile-icon-img" alt="プロフィールアイコン">
        <figcaption class="my-name"><?php echo esc_html( $current_user->display_name ); ?></figcaption>
    </figure>
    <p class="profile-txt">ご訪問ありがとうございます!Junichiro Kohariと申します。</p>
    <p class="profile-txt">大阪府内でSEとして働くかたわら、Web制作のお仕事も行っております。</p>
    <p class="profile-txt">趣味は、外国人の友達とチャットをすることです。ポーランド人やウルグアイ人など、ネットで出会った友達と週末によくチャットをしています。普段当たり前のようにネットでコミュニケーションを取っていますが、はるか遠く離れた所にいる人と瞬時にやりとりができるってすごいことですよね。私は、ネットによって人と人とが繋がるという体験を仕事でも実現させていきたいなと思っています。</p>
    <p class="profile-txt">ちょっとした相談やお悩み事の相談でも構いません。ご気軽にご連絡ください。</p>
    <h3 class="section-title">開発技術</h3>
    <section class="profile-section technology">
        <dl class="profile-dl">
            <dt class="profile-dt">OS</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span class="technology-name">windows10</span>
                    <svg class="technology-logo" viewBox="0 0 256 257" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M0 36.357L104.62 22.11l.045 100.914-104.57.595L0 36.358zm104.57 98.293l.08 101.002L.081 221.275l-.006-87.302 104.494.677zm12.682-114.405L255.968 0v121.74l-138.716 1.1V20.246zM256 135.6l-.033 121.191-138.716-19.578-.194-101.84L256 135.6z" fill="#00ADEF"/></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">mac os Catalina</span>
                    <svg class="technology-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.008 560.035"><path d="M380.844 297.529c.787 84.752 74.349 112.955 75.164 113.314-.622 1.988-11.754 40.191-38.756 79.652-23.343 34.117-47.568 68.107-85.731 68.811-37.499.691-49.557-22.236-92.429-22.236-42.859 0-56.256 21.533-91.753 22.928-36.837 1.395-64.889-36.891-88.424-70.883-48.093-69.53-84.846-196.475-35.496-282.165 24.516-42.554 68.328-69.501 115.882-70.192 36.173-.69 70.315 24.336 92.429 24.336 22.1 0 63.59-30.096 107.208-25.676 18.26.76 69.517 7.376 102.429 55.552-2.652 1.644-61.159 35.704-60.523 106.559M310.369 89.418C329.926 65.745 343.089 32.79 339.498 0 311.308 1.133 277.22 18.785 257 42.445c-18.121 20.952-33.991 54.487-29.709 86.628 31.421 2.431 63.52-15.967 83.078-39.655"/></svg>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">デザインツール</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span class="technology-name">Adobe XD</span>
                    <svg class="technology-logo" id="ps_x5F_cc_x5F_app_x5F_RGB.svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 234"><style>.st0{fill:#2e001e}.st1{fill:#ff2bc2}</style><path class="st0" d="M10 10h220v214H10z"/><path class="st1" d="M0 0v234h240V0H0zm10 10h220v214H10V10z"/><path class="st1" d="M174.3 98.3c-1.5-.7-3.4-1-5.8-1-12.6 0-21 9.7-21 25.8 0 18.4 8.6 25.8 19.8 25.8 2.4 0 5-.3 6.9-1.1V98.3h.1zm-44.8 25.6c0-23.3 15-41.5 39.6-41.5 2.1 0 3.2 0 5.2.2v-26c0-.6.5-1 1-1h16.1c.8 0 1 .3 1 .8v91.4c0 2.7 0 6.1.5 9.8 0 .7 0 .8-.6 1.1-8.4 4-17.2 5.8-25.6 5.8-21.7 0-37.2-13.4-37.2-40.6zm-34.1-16.2l28 54.3c.5.8.2 1.6-.6 1.6h-17.4c-1.1 0-1.6-.3-2.1-1.3-6.4-13.2-12.9-26.9-19.6-41.1h-.2c-6 13.4-12.6 28-19 41.2-.5.8-1 1.1-1.8 1.1H46.1c-1 0-1.1-.8-.6-1.4l27.4-52.7L46.4 57c-.6-.8 0-1.5.7-1.5h17.2c1 0 1.5.2 1.8 1.1C72.4 69.9 78.8 83 84.8 96.4h.2c5.8-13.2 12.2-26.5 18.3-39.6.5-.8.8-1.3 1.8-1.3h16.1c.8 0 1.1.6.6 1.5l-26.4 50.7z"/></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">Adobe Photoshop</span>
                    <svg class="technology-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 130.746 595.279 580.398"><radialGradient id="a" cx="-183.69" cy="328.972" r=".76" gradientTransform="matrix(545.6736 0 0 528.3113 100439.305 -173525.125)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#34364e" stop-opacity=".98"/><stop offset="1" stop-color="#0c0824"/></radialGradient><path d="M24.803 155.549h545.674v530.792H24.803V155.549z" fill="url(#a)"/><path d="M24.803 155.549h545.674v530.792H24.803V155.549zM0 711.145h595.28V130.746H0v580.399zm401.318-342.287c-19.595 0-26.291 9.921-26.291 18.106 0 8.929 4.464 15.13 30.756 28.772 38.941 18.851 51.095 36.957 51.095 63.497 0 39.685-30.26 61.016-71.186 61.016-21.579 0-40.182-4.465-50.847-10.665-1.736-.744-1.984-1.984-1.984-3.969v-36.461c0-2.48 1.24-3.225 2.977-1.984 15.626 10.17 33.484 14.634 49.854 14.634 19.595 0 27.78-8.185 27.78-19.347 0-8.929-5.705-16.866-30.757-29.764-35.221-16.866-49.854-33.98-49.854-62.504 0-31.997 25.052-58.536 68.457-58.536 21.331 0 36.213 3.225 44.398 6.945 1.984 1.24 2.48 3.224 2.48 4.96v33.98c0 1.984-1.24 3.225-3.721 2.48-10.913-6.943-27.035-11.16-43.157-11.16zm-213.309 29.516c5.705.496 10.17.496 20.091.496 29.021 0 56.304-10.169 56.304-49.606 0-31.5-19.595-47.375-52.583-47.375-9.921 0-19.347.496-23.812.744v95.741zM143.86 266.668c0-1.736 3.473-2.977 5.456-2.977 15.875-.744 39.438-1.24 63.993-1.24 68.705 0 95.492 37.701 95.492 85.82 0 63-45.638 90.036-101.693 90.036-9.425 0-12.649-.496-19.347-.496v95.245c0 1.984-.744 2.976-2.976 2.976h-37.949c-1.984 0-2.977-.744-2.977-2.976V266.668z" fill="#31c5f0"/></svg>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">開発ツール</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span class="technology-name">Visual Studio Code</span>
                    <svg class="technology-logo" viewBox="-11.9 -2 1003.9 995.6" xmlns="http://www.w3.org/2000/svg"><path d="m12.1 353.9s-24-17.3 4.8-40.4l67.1-60s19.2-20.2 39.5-2.6l619.2 468.8v224.8s-.3 35.3-45.6 31.4z" fill="#2489ca"/><path d="m171.7 498.8-159.6 145.1s-16.4 12.2 0 34l74.1 67.4s17.6 18.9 43.6-2.6l169.2-128.3z" fill="#1070b3"/><path d="m451.9 500 292.7-223.5-1.9-223.6s-12.5-48.8-54.2-23.4l-389.5 354.5z" fill="#0877b9"/><path d="m697.1 976.2c17 17.4 37.6 11.7 37.6 11.7l228.1-112.4c29.2-19.9 25.1-44.6 25.1-44.6v-671.2c0-29.5-30.2-39.7-30.2-39.7l-197.7-95.3c-43.2-26.7-71.5 4.8-71.5 4.8s36.4-26.2 54.2 23.4v887.5c0 6.1-1.3 12.1-3.9 17.5-5.2 10.5-16.5 20.3-43.6 16.2z" fill="#3c99d4"/></svg>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">開発言語</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span class="technology-name">HTML5</span>
                    <svg class="technology-logo" xmlns="http://www.w3.org/2000/svg" viewBox="221.807 89.47 440 621.061" enable-background="new 221.807 89.47 440 621.061"><path fill="#e44d26" d="M261.849 660.647l-40.042-449.125h440l-40.086 449.054-180.184 49.954z"/><path fill="#f16529" d="M441.807 672.348l145.596-40.367 34.258-383.735H441.807z"/><path fill="#ebebeb" d="M441.807 414.82h-72.888l-5.035-56.406h77.923V303.33H303.683l1.32 14.778 13.538 151.794h123.266zM441.807 557.876l-.242.066-61.346-16.566-3.922-43.93h-55.294l7.718 86.489 112.834 31.323.252-.071z"/><path d="M262.745 89.47h27.992v27.656h25.606V89.47h27.993v83.75h-27.993v-28.044h-25.606v28.044h-27.99l-.002-83.75zM381.149 117.244h-24.642V89.47H433.8v27.774h-24.654v55.976H381.15v-55.976h-.001zM446.065 89.47h29.19l17.955 29.428 17.938-29.428h29.2v83.75h-27.882v-41.512l-19.259 29.778h-.481l-19.272-29.778v41.512h-27.39V89.47zM554.277 89.47h28v56.068h39.368v27.682h-67.368V89.47z"/><path fill="#fff" d="M441.617 414.82v55.082h67.83l-6.395 71.44-61.435 16.58v57.307l112.924-31.294.826-9.309 12.946-145.014 1.344-14.792h-14.842zM441.617 303.33v55.084H574.67l1.103-12.382 2.51-27.924 1.318-14.778z"/></g></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">CSS3</span>
                    <svg class="technology-logo" enable-background="new  0 1771 2499.8" viewBox="0 0 1771 2499.8" xmlns="http://www.w3.org/2000/svg"><path d="m1387.8 92.5h-146.9l152.8 165.9v78.9h-314.8v-92.4h152.8l-152.8-165.9v-79h309zm-371.4 0h-147.1l153 165.9v78.9h-314.9v-92.4h152.8l-152.8-165.9v-79h309zm-367.8 3.8h-158.5v144.8h158.5v96.3h-271.3v-337.4h271.3z" fill="#131313"/><path d="m161.2 2299.1-161.2-1807.7h1771l-161.4 1807.4-725.2 201z" fill="#1572b6"/><path d="m885.5 2346.2 586-162.5 137.8-1544.5h-723.8z" fill="#33a9dc"/><path d="m885.5 1294.1h293.4l20.2-227h-313.6v-221.6h556l-5.3 59.5-54.5 611h-496.2z" fill="#fff"/><path d="m886.7 1869.9h-1l-246.9-66.7-15.8-176.8h-222.4l31.1 348.1 454.2 126.4h1.3v-231z" fill="#ebebeb"/><path d="m1160.1 1506.3-26.7 296.7-247.3 66.7v231l454.5-126 3.3-37.5 38.6-431h-222.4z" fill="#fff"/><path d="m886.3 845.5v221.7h-535.4l-4.6-49.8-10.1-112.4-5.3-59.5zm-.8 448.6v221.7h-244.1l-4.3-49.8-10.1-112.4-5.3-59.5h263.7z" fill="#ebebeb"/></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">Sass</span>
                    <svg class="technology-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 384"><path fill="#CF649A" d="M440.6 220.6c-17.9.101-33.4 4.4-46.4 10.801-4.8-9.5-9.6-17.801-10.399-24-.9-7.2-2-11.601-.9-20.2C384 178.6 389 166.4 389 165.4c-.101-.9-1.101-5.3-11.4-5.4s-19.2 2-20.2 4.7-3 8.9-4.3 15.3c-1.8 9.4-20.6 42.7-31.3 60.2-3.5-6.8-6.5-12.8-7.101-17.601-.899-7.199-2-11.6-.899-20.199 1.1-8.601 6.1-20.8 6.1-21.8-.1-.9-1.1-5.3-11.399-5.4-10.301-.1-19.2 2-20.2 4.7s-2.1 9.1-4.3 15.3C281.9 201.4 256.9 257 250.4 271.5c-3.3 7.4-6.199 13.3-8.3 17.3-2.1 4-.1.3-.3.7-1.8 3.4-2.8 5.3-2.8 5.3v.101c-1.4 2.5-2.9 4.899-3.601 4.899-.5 0-1.5-6.7.2-15.899 3.7-19.301 12.7-49.4 12.601-50.5 0-.5 1.699-5.801-5.801-8.5-7.3-2.7-9.899 1.8-10.5 1.8-.6 0-1.1 1.6-1.1 1.6s8.1-33.899-15.5-33.899c-14.8 0-35.2 16.1-45.3 30.8-6.4 3.5-20 10.899-34.4 18.8-5.5 3-11.2 6.2-16.6 9.1L117.9 251.9c-28.6-30.5-81.5-52.1-79.3-93.1.8-14.9 6-54.2 101.601-101.8 78.3-39 141-28.3 151.899-4.5 15.5 34-33.5 97.2-114.899 106.3-31 3.5-47.301-8.5-51.4-13-4.3-4.7-4.9-4.9-6.5-4-2.6 1.4-1 5.6 0 8.1 2.4 6.3 12.4 17.5 29.4 23.1 14.899 4.9 51.3 7.6 95.3-9.4 49.3-19.1 87.8-72.1 76.5-116.4-11.5-45.1-86.3-59.9-157-34.8C121.4 27.4 75.8 50.8 43 81.5 4 117.9-2.2 149.7.4 162.9c9.101 47.1 74 77.8 100 100.5-1.3.699-2.5 1.399-3.6 2-13 6.399-62.5 32.3-74.9 59.699-14 31 2.2 53.301 13 56.301 33.4 9.3 67.6-7.4 86.1-34.9 18.399-27.5 16.2-63.2 7.7-79.5l-.301-.6 10.2-6c6.601-3.9 13.101-7.5 18.8-10.601-3.199 8.7-5.5 19-6.699 34-1.4 17.601 5.8 40.4 15.3 49.4 4.2 3.899 9.2 4 12.3 4 11 0 16-9.101 21.5-20 6.8-13.3 12.8-28.7 12.8-28.7s-7.5 41.7 13 41.7c7.5 0 15-9.7 18.4-14.7v.1s.2-.3.6-1a36.13 36.13 0 0 0 1.2-1.899v-.2c3-5.2 9.7-17.1 19.7-36.8 12.899-25.4 25.3-57.2 25.3-57.2s1.2 7.8 4.9 20.6c2.199 7.601 6.999 15.9 10.699 24-3 4.2-4.8 6.601-4.8 6.601l.1.1c-2.399 3.2-5.1 6.601-7.899 10-10.2 12.2-22.4 26.101-24 30.101-1.9 4.699-1.5 8.199 2.2 11 2.7 2 7.5 2.399 12.6 2 9.2-.601 15.6-2.9 18.8-4.301 5-1.8 10.7-4.5 16.2-8.5 10-7.399 16.1-17.899 15.5-31.899-.3-7.7-2.8-15.3-5.9-22.5.9-1.3 1.801-2.601 2.7-4 15.8-23.101 28-48.5 28-48.5s1.2 7.8 4.9 20.6c1.899 6.5 5.7 13.601 9.1 20.601-14.8 12.1-24.1 26.1-27.3 35.3-5.9 17-1.3 24.7 7.4 26.5 3.899.8 9.5-1 13.699-2.8 5.2-1.7 11.5-4.601 17.301-8.9 10-7.4 19.6-17.7 19.1-31.6-.3-6.4-2-12.7-4.3-18.7 12.6-5.2 28.899-8.2 49.6-5.7 44.5 5.2 53.3 33 51.601 44.6-1.7 11.601-11 18-14.101 20-3.1 1.9-4.1 2.601-3.8 4 .4 2.101 1.8 2 4.5 1.601 3.7-.601 23.4-9.5 24.2-30.899 1.2-27.504-24.9-57.504-71.2-57.205zM97.4 336.3c-14.7 16.1-35.4 22.2-44.2 17-9.5-5.5-5.801-29.2 12.3-46.3 11-10.4 25.3-20 34.7-25.9 2.1-1.3 5.3-3.199 9.1-5.5.6-.399 1-.6 1-.6.7-.4 1.5-.9 2.3-1.4 6.7 24.4.3 45.8-15.2 62.7zm107.5-73.1c-5.1 12.5-15.9 44.6-22.4 42.8-5.601-1.5-9-25.8-1.101-49.8 4-12.101 12.5-26.5 17.5-32.101 8.101-9 16.9-12 19.101-8.3 2.6 4.801-9.9 39.601-13.1 47.401zm88.7 42.4c-2.2 1.101-4.2 1.9-5.1 1.301-.7-.4.899-1.9.899-1.9s11.1-11.9 15.5-17.4c2.5-3.199 5.5-6.899 8.7-11.1v1.2C313.6 292.1 299.8 301.7 293.6 305.6zm68.399-15.6c-1.6-1.2-1.399-4.9 4-16.5 2.101-4.6 6.9-12.3 15.2-19.6 1 3 1.601 5.899 1.5 8.6-.099 18-12.899 24.7-20.7 27.5z"/></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">Less</span>
                    <svg class="technology-logo" viewBox="0 0 256 110" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="b"><stop stop-color="#2E4F82" offset="0%"/><stop stop-color="#182E4D" offset="100%"/></linearGradient><path id="a" d="M224.236 88.738c0 11.564-9.688 21.025-21.529 21.025H21.75c-11.841 0-21.529-9.461-21.529-21.025V21.781C.221 10.218 9.909.756 21.75.756h180.957c11.841 0 21.529 9.462 21.529 21.025v66.957"/><path id="c" d="M-15.94.496H240V110H-15.94"/></defs><g transform="translate(16)"><use fill="url(#b)" xlink:href="#a"/><mask id="d" fill="#fff"><use xlink:href="#c"/></mask><use xlink:href="#c"/><path d="M229.071 40.43c0-8.197 1.261-13.031 1.261-21.858 0-13.662-5.045-18.076-16.184-18.076h-8.197v9.668h2.522c5.675 0 6.936 1.892 6.936 8.828 0 6.515-.631 13.031-.631 20.598 0 9.668 3.153 13.451 9.458 14.922v.631c-6.305 1.471-9.458 5.255-9.458 14.923 0 7.566.631 13.662.631 20.598 0 7.146-1.471 9.037-6.936 9.037v.21h-2.522V110h8.197c11.139 0 16.184-4.414 16.184-18.075 0-9.038-1.261-13.662-1.261-21.859 0-4.414 2.732-9.038 10.929-9.458v-10.93c-8.197-.21-10.929-4.834-10.929-9.248M135.961 53.251c-6.516-2.522-12.401-3.993-12.401-8.197 0-3.152 2.522-5.044 7.146-5.044 4.624 0 8.828 1.892 13.452 5.255l8.407-11.14c-5.255-3.993-12.401-8.197-22.069-8.197-14.292 0-23.961 8.197-23.961 19.757 0 10.299 9.038 15.553 16.605 18.496 6.515 2.522 12.821 4.624 12.821 8.827 0 3.153-2.523 5.255-8.197 5.255-5.255 0-10.509-2.102-16.184-6.516l-8.197 12.191c6.305 5.254 15.973 8.827 23.96 8.827 16.815 0 25.852-8.827 25.852-20.387s-9.037-16.394-17.234-19.127M186.824 53.251c-6.305-2.522-12.19-3.993-12.19-8.197 0-3.152 2.522-5.044 7.146-5.044 4.624 0 8.828 1.892 13.452 5.255l8.407-11.14c-5.255-3.993-12.401-8.197-22.069-8.197-14.293 0-23.961 8.197-23.961 19.757 0 10.299 9.038 15.553 16.604 18.496 6.516 2.522 12.821 4.624 12.821 8.827 0 3.153-2.522 5.255-8.197 5.255-5.254 0-10.509-2.102-16.183-6.516l-8.408 12.191c6.306 5.254 15.974 8.827 23.961 8.827 16.814 0 25.852-8.827 25.852-20.387s-9.038-16.394-17.235-19.127M61.977 52.2c1.261-8.407 6.305-12.4 12.19-12.4 7.567 0 10.51 5.254 10.51 12.4h-22.7zm38.673 3.784c.21-17.025-9.038-30.266-26.693-30.266-15.343 0-30.055 12.821-29.635 32.998 0 20.808 13.662 32.998 31.737 32.998 7.567 0 15.974-2.732 22.489-7.146l-6.305-11.139c-4.624 2.732-9.038 3.993-13.662 3.993-8.407 0-14.923-3.993-16.604-13.662h38.043c.21-1.471.63-4.413.63-7.776z" fill="#FAF9F8" mask="url(#d)"/><path d="M43.271 77.002c-1.471 0-3.363-1.261-3.363-5.255V.496H10.062C-1.287.496-6.332 4.91-6.332 18.572c0 9.037 1.261 14.082 1.261 21.858 0 4.414-2.732 9.038-10.929 9.458v10.93c8.197.21 10.929 4.834 10.929 9.248 0 7.777-1.261 12.4-1.261 21.438 0 13.662 5.045 18.076 16.184 18.076h8.197v-9.669h-2.522c-5.254 0-6.936-2.101-6.936-9.037 0-6.936.631-12.821.631-20.598 0-9.668-3.153-13.452-9.459-14.923v-.63c6.306-1.472 9.459-5.255 9.459-14.923 0-7.567-.631-13.662-.631-20.598 0-6.936 1.471-8.827 6.936-8.827h5.675v60.321c0 12.821 4.414 21.229 17.235 21.229 3.993 0 7.146-.631 9.458-1.472l-2.102-13.661c-1.261.21-1.891.21-2.522.21" fill="#FAF9F8" mask="url(#d)"/></g></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">PHP</span>
                    <svg class="technology-logo" viewBox="0 0 256 134" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><g fill-rule="evenodd"><ellipse fill="#8993BE" cx="128" cy="66.63" rx="128" ry="66.63"/><path d="M35.945 106.082l14.028-71.014H82.41c14.027.877 21.041 7.89 21.041 20.165 0 21.041-16.657 33.315-31.562 32.438H56.11l-3.507 18.411H35.945zm23.671-31.561L64 48.219h11.397c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.52zM100.192 87.671l14.027-71.013h16.658l-3.507 18.41h15.78c14.028.877 19.288 7.89 17.535 16.658l-6.137 35.945h-17.534l6.137-32.438c.876-4.384.876-7.014-5.26-7.014H124.74l-7.89 39.452h-16.658zM153.425 106.082l14.027-71.014h32.438c14.028.877 21.042 7.89 21.042 20.165 0 21.041-16.658 33.315-31.562 32.438h-15.781l-3.507 18.411h-16.657zm23.67-31.561l4.384-26.302h11.398c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.521z" fill="#232531"/></g></svg>
                </div>
                <div class="dd-div">
                    <span class="technology-name">JavaScript</span>
                    <svg class="technology-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1052 1052"><path fill="#f0db4f" d="M0 0h1052v1052H0z"/><path d="M965.9 801.1c-7.7-48-39-88.3-131.7-125.9-32.2-14.8-68.1-25.399-78.8-49.8-3.8-14.2-4.3-22.2-1.9-30.8 6.9-27.9 40.2-36.6 66.6-28.6 17 5.7 33.1 18.801 42.8 39.7 45.4-29.399 45.3-29.2 77-49.399-11.6-18-17.8-26.301-25.4-34-27.3-30.5-64.5-46.2-124-45-10.3 1.3-20.699 2.699-31 4-29.699 7.5-58 23.1-74.6 44-49.8 56.5-35.6 155.399 25 196.1 59.7 44.8 147.4 55 158.6 96.9 10.9 51.3-37.699 67.899-86 62-35.6-7.4-55.399-25.5-76.8-58.4-39.399 22.8-39.399 22.8-79.899 46.1 9.6 21 19.699 30.5 35.8 48.7 76.2 77.3 266.899 73.5 301.1-43.5 1.399-4.001 10.6-30.801 3.199-72.101zm-394-317.6h-98.4c0 85-.399 169.4-.399 254.4 0 54.1 2.8 103.7-6 118.9-14.4 29.899-51.7 26.2-68.7 20.399-17.3-8.5-26.1-20.6-36.3-37.699-2.8-4.9-4.9-8.7-5.601-9-26.699 16.3-53.3 32.699-80 49 13.301 27.3 32.9 51 58 66.399 37.5 22.5 87.9 29.4 140.601 17.3 34.3-10 63.899-30.699 79.399-62.199 22.4-41.3 17.6-91.3 17.4-146.6.5-90.2 0-180.4 0-270.9z" fill="#323330"/></svg>
                </div>
            </dd>
        </dl>
        <dl class="profile-dl">
            <dt class="profile-dt">サーバー</dt>
            <dd class="profile-dd">
                <div class="dd-div">
                    <span class="technology-name">各社レンタルサーバ</span>
                </div>
                <div class="dd-div">
                    <span class="technology-name">AWS</span>
                    <svg class="technology-logo" viewBox="-.1 1.1 304.9 179.8" xmlns="http://www.w3.org/2000/svg"><path d="m86.4 66.4c0 3.7.4 6.7 1.1 8.9.8 2.2 1.8 4.6 3.2 7.2.5.8.7 1.6.7 2.3 0 1-.6 2-1.9 3l-6.3 4.2c-.9.6-1.8.9-2.6.9-1 0-2-.5-3-1.4-1.4-1.5-2.6-3.1-3.6-4.7-1-1.7-2-3.6-3.1-5.9-7.8 9.2-17.6 13.8-29.4 13.8-8.4 0-15.1-2.4-20-7.2s-7.4-11.2-7.4-19.2c0-8.5 3-15.4 9.1-20.6s14.2-7.8 24.5-7.8c3.4 0 6.9.3 10.6.8s7.5 1.3 11.5 2.2v-7.3c0-7.6-1.6-12.9-4.7-16-3.2-3.1-8.6-4.6-16.3-4.6-3.5 0-7.1.4-10.8 1.3s-7.3 2-10.8 3.4c-1.6.7-2.8 1.1-3.5 1.3s-1.2.3-1.6.3c-1.4 0-2.1-1-2.1-3.1v-4.9c0-1.6.2-2.8.7-3.5s1.4-1.4 2.8-2.1c3.5-1.8 7.7-3.3 12.6-4.5 4.9-1.3 10.1-1.9 15.6-1.9 11.9 0 20.6 2.7 26.2 8.1 5.5 5.4 8.3 13.6 8.3 24.6v32.4zm-40.6 15.2c3.3 0 6.7-.6 10.3-1.8s6.8-3.4 9.5-6.4c1.6-1.9 2.8-4 3.4-6.4s1-5.3 1-8.7v-4.2c-2.9-.7-6-1.3-9.2-1.7s-6.3-.6-9.4-.6c-6.7 0-11.6 1.3-14.9 4s-4.9 6.5-4.9 11.5c0 4.7 1.2 8.2 3.7 10.6 2.4 2.5 5.9 3.7 10.5 3.7zm80.3 10.8c-1.8 0-3-.3-3.8-1-.8-.6-1.5-2-2.1-3.9l-23.5-77.3c-.6-2-.9-3.3-.9-4 0-1.6.8-2.5 2.4-2.5h9.8c1.9 0 3.2.3 3.9 1 .8.6 1.4 2 2 3.9l16.8 66.2 15.6-66.2c.5-2 1.1-3.3 1.9-3.9s2.2-1 4-1h8c1.9 0 3.2.3 4 1 .8.6 1.5 2 1.9 3.9l15.8 67 17.3-67c.6-2 1.3-3.3 2-3.9.8-.6 2.1-1 3.9-1h9.3c1.6 0 2.5.8 2.5 2.5 0 .5-.1 1-.2 1.6s-.3 1.4-.7 2.5l-24.1 77.3c-.6 2-1.3 3.3-2.1 3.9s-2.1 1-3.8 1h-8.6c-1.9 0-3.2-.3-4-1s-1.5-2-1.9-4l-15.5-64.5-15.4 64.4c-.5 2-1.1 3.3-1.9 4s-2.2 1-4 1zm128.5 2.7c-5.2 0-10.4-.6-15.4-1.8s-8.9-2.5-11.5-4c-1.6-.9-2.7-1.9-3.1-2.8s-.6-1.9-.6-2.8v-5.1c0-2.1.8-3.1 2.3-3.1.6 0 1.2.1 1.8.3s1.5.6 2.5 1c3.4 1.5 7.1 2.7 11 3.5 4 .8 7.9 1.2 11.9 1.2 6.3 0 11.2-1.1 14.6-3.3s5.2-5.4 5.2-9.5c0-2.8-.9-5.1-2.7-7s-5.2-3.6-10.1-5.2l-14.5-4.5c-7.3-2.3-12.7-5.7-16-10.2-3.3-4.4-5-9.3-5-14.5 0-4.2.9-7.9 2.7-11.1s4.2-6 7.2-8.2c3-2.3 6.4-4 10.4-5.2s8.2-1.7 12.6-1.7c2.2 0 4.5.1 6.7.4 2.3.3 4.4.7 6.5 1.1 2 .5 3.9 1 5.7 1.6s3.2 1.2 4.2 1.8c1.4.8 2.4 1.6 3 2.5.6.8.9 1.9.9 3.3v4.7c0 2.1-.8 3.2-2.3 3.2-.8 0-2.1-.4-3.8-1.2-5.7-2.6-12.1-3.9-19.2-3.9-5.7 0-10.2.9-13.3 2.8s-4.7 4.8-4.7 8.9c0 2.8 1 5.2 3 7.1s5.7 3.8 11 5.5l14.2 4.5c7.2 2.3 12.4 5.5 15.5 9.6s4.6 8.8 4.6 14c0 4.3-.9 8.2-2.6 11.6-1.8 3.4-4.2 6.4-7.3 8.8-3.1 2.5-6.8 4.3-11.1 5.6-4.5 1.4-9.2 2.1-14.3 2.1z" fill="#252f3e"/><g clip-rule="evenodd" fill="#f90" fill-rule="evenodd"><path d="m273.5 143.7c-32.9 24.3-80.7 37.2-121.8 37.2-57.6 0-109.5-21.3-148.7-56.7-3.1-2.8-.3-6.6 3.4-4.4 42.4 24.6 94.7 39.5 148.8 39.5 36.5 0 76.6-7.6 113.5-23.2 5.5-2.5 10.2 3.6 4.8 7.6z"/><path d="m287.2 128.1c-4.2-5.4-27.8-2.6-38.5-1.3-3.2.4-3.7-2.4-.8-4.5 18.8-13.2 49.7-9.4 53.3-5 3.6 4.5-1 35.4-18.6 50.2-2.7 2.3-5.3 1.1-4.1-1.9 4-9.9 12.9-32.2 8.7-37.5z"/></g></svg>
                </div>
            </dd>
        </dl>
    </section>
    <h3 class="section-title">概要</h3>
    <section class="profile-section about">
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
