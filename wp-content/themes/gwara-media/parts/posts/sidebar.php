<aside class="article-body--right col-12 col-lg-4 col-xl-3">
    <div class="article-content sticky-el" data-sticky-breakpoint="992px">
        <div class="read-more bg--yellow">
            <?php gm_related_posts(); ?>
            <?php
            if ($ads_img = get_field('ad_3_banner', 'option')) { ?>
                <a href="<?php the_field('ad_3_link', 'option') ?>" <?php echo (strpos(get_field('ad_3_link', 'option'), site_url())) === false ? ' target="_blank"' : ''; ?>>
                    <div class="ad" style="background-image: url(<?php echo $ads_img ?>)">
                        <div class="ad-content">
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </a>
            <?php } else { ?>
                <div class="ad">
                    <div class="ad-content">
                        <p><b><?php esc_html_e('Advertising space', 'gm'); ?></b></p>
                    </div>
                </div>
                <?php
            }
            ?>
            <ul class="links row">
                <?php if ($id = wpml_object_id_filter(ABOUT_PAGE, 'page', false, ICL_LANGUAGE_CODE)) { ?>
                    <li class="col-6"><a
                                href="<?php echo get_the_permalink($id) ?>"><?php echo get_the_title($id) ?></a></li>
                <?php } ?>
                <?php if ($id = wpml_object_id_filter(COOKIE_PAGE, 'page', false, ICL_LANGUAGE_CODE)) { ?>
                    <li class="col-6"><a
                                href="<?php echo get_the_permalink($id) ?>"><?php echo get_the_title($id) ?></a></li>
                <?php } ?>
                <?php if ($id = wpml_object_id_filter(PERSONAL_DATA_PAGE, 'page', false, ICL_LANGUAGE_CODE)) { ?>
                    <li class="col-6"><a
                                href="<?php echo get_the_permalink($id) ?>"><?php echo get_the_title($id) ?></a></li>
                <?php } ?>
                <?php if ($id = wpml_object_id_filter(ADVERTISING_PAGE, 'page', false, ICL_LANGUAGE_CODE)) { ?>
                    <li class="col-6"><a
                                href="<?php echo get_the_permalink($id) ?>"><?php echo get_the_title($id) ?></a></li>
                <?php } ?>
            </ul>
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
            <div class="copyright">
                <p><?php esc_html_e('All rights reserved.', 'gm'); ?>
                    <br><?php esc_html_e('Hyperlink to the original source when using materials Gwara Media is a must.', 'gm'); ?>
                </p>
            </div>
        </div>
    </div>
</aside>