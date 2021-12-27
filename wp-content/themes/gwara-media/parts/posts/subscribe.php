<div class="sp-form-outer sp-force-hide">
    <div id="sp-form-166304" sp-id="166304" sp-hash="27aa27f1b3255ce653849f16927262c1d16fe482605dfe9b0a0a7fa0e6167454"
         sp-lang="ua" class="sp-form sp-form-regular sp-form-embed"
         sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3Anull%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3Anull%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%2C%22utmEnable%22%3Afalse%7D">
        <div class="sp-form-fields-wrapper">
            <div class="sp-message">
                <div></div>
            </div>
            <form novalidate=""
                  class="sp-element-container ui-sortable ui-droppable form form-subscribe bg--green article-subscribe">

                <div class="form-content">
                    <legend><?php esc_html_e('Subscribe and follow us', 'gm'); ?></legend>
                    <?php if ($social_links = get_field('social_links', 'option')) { ?>
                        <ul class="social-list d-flex align-items-center">
                            <?php foreach ($social_links as $item) { ?>
                                <li class="social-list--item"><a href="<?php echo $item['link'] ?>" target="_blank">
                                        <div class="icon icon--default">
                                            <?php echo wp_get_attachment_image($item['icon'], 'thumbnail') ?>
                                        </div>
                                    </a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <div class="input-inner">
                        <div class="sp-field " sp-id="sp-df85b116-f883-4e47-b4a5-8420cc42822c">
                            <input type="email" sp-type="email" name="sform[email]"
                                   class="theme-input bg--light"
                                   placeholder="<?php esc_html_e('Enter your e-mail', 'gm'); ?>"
                                   sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D0%BE%D0%B2'%D1%8F%D0%B7%D0%BA%D0%BE%D0%B2%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D1%96%D1%80%D0%BD%D0%B0%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%22%7D"
                                   required="required">
                        </div>
                    </div>
                        <button type="submit" id="sp-d2141fde-7bec-4612-b195-19a6f7e13445"
                                class="button button--yellow"><?php esc_html_e('Submit', 'gm'); ?></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/form-zigzag.svg" alt="alt">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="//web.webformscr.com/apps/fc3/build/default-handler.js?1600674128293"></script>
<!-- /Subscription Form -->