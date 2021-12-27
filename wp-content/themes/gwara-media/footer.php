</main>
<?php if (get_post_format() != 'status') { ?>
    <?php if (!is_user_logged_in()) { ?>
        <div class="modal closed">
            <div class="modal-window modal-hidden" id="login-modal">
                <h2><?php esc_html_e('Log in', 'gm'); ?></h2>
                <form id="login" class="bordered-inputs login-form modal-module">
                    <p class="status"></p>
                    <?php wp_nonce_field('ajax-login-nonce', 'security', true, true); ?>
                    <div class="input-inner">
                        <input type="text" id="username" name="email" placeholder="<?php esc_html_e('Login', 'gm'); ?>">
                    </div>
                    <div class="input-inner">
                        <input id="password" type="password" name="password"
                               placeholder="<?php esc_html_e('Password', 'gm'); ?>">
                    </div>
                    <input id="rememberme" type="hidden" name="rememberme" value="true">
                    <button class="button button--yellow" type="submit"><?php esc_html_e('Log In', 'gm'); ?></button>
                </form>
                <div class="social-login modal-module">
                    <h3><?php esc_html_e('Or', 'gm'); ?></h3>
                    <a class="button social-login--btn social-login--btn-google" aria-label="Увійти з Google"
                       href="<?php echo site_url() ?>/wp-login.php?loginSocial=google&redirect=<?php echo home_url() ?>"
                       data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google"
                       data-popupwidth="475" data-popupheight="175">
                        <div class="icon icon--default">
                            <svg preserveAspectRatio="none">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#google"></use>
                            </svg>
                        </div>
                        <span>Google</span>
                    </a>

                    <a class="button social-login--btn social-login--btn-fb" aria-label="Увійти з Facebook"
                       href="<?php echo site_url() ?>/wp-login.php?loginSocial=facebook&redirect=<?php echo home_url() ?>"
                       data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook"
                       data-popupwidth="475" data-popupheight="175">
                        <div class="icon icon--default">
                            <svg preserveAspectRatio="none">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#fb_login"></use>
                            </svg>
                        </div>
                        <span>Facebook</span>
                    </a>


                    <?php // echo do_shortcode('[nextend_social_login]'); ?>

                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>

</div>
<footer class="footer bg--yellow">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-xl-3"><a class="logo" href="/"><img
                            srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a>
                <?php if ($social_links = get_field('social_links', 'option')) { ?>
                    <ul class="social-list d-flex align-items-center">
                        <?php foreach ($social_links as $item) { ?>
                            <li class="social-list--item"><a onclick="gtag('event', 'click', {'event_category' : 'social'});" href="<?php echo $item['link'] ?>" target="_blank">
                                    <div class="icon icon--default">
                                        <?php echo wp_get_attachment_image($item['icon'], 'thumbnail') ?>
                                    </div>
                                </a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <div class="mt-4">
                    <p>
                        <b><?php esc_html_e('All rights reserved.', 'gm'); ?></b><br><?php esc_html_e('Hyperlink to the original source when using materials Gwara Media is a must.', 'gm'); ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xl-9 col-l_xxl-8 pl-lg-4 pl-l_xxl-5 offset-l_xxl-1 pl-l_xxl-0">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container' => 'nav',
                    'container_class' => 'footer-nav pt-5 pt-lg-0',
                    'menu_class' => 'row no-gutters footer-menu',
                    'walker' => new footer_walker
                ));
                ?>
            </div>
            <?php if ($txt = get_field('text_under_footer', 'option')) { ?>
                <div class="mt-5 copyright"><?php echo $txt ?></div>
            <?php } ?>
        </div>
    </div>
</footer>

<a href="https://www.patreon.com/gwaramedia" id="patreon" target="_blank">
    patreon
</a>
<?php wp_footer() ?>
</body>
</html>