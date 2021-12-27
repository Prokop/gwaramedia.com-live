<section class="articles-on-category-section">
    <div class="container">
        <ul class="row articles-on-category my-0">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'cat' => get_queried_object_id()
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : $i = 0;
                $classes = 'articles-on-category col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 mb-xl-0';
                ?>
                <?php while ($query->have_posts()) : $query->the_post();
                    if ($i < 4) {
                        if ($i == 3) {
                            $classes = 'articles-on-category col-12 col-sm-6 col-lg-3 mb-0 d-lg-none d-xl-block';
                        } ?>
                        <li class="<?php echo $classes ?>">
                            <a class="card bg--disabled card--type-5" href="<?php the_permalink() ?>">
                                <div class="card-text">
                                    <div class="card-text--body">
                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                    </div>
                                    <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                        <div class="card-text--footer">
                                            <?php foreach ($tags as $tag) { ?>
                                                <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="card-image">
                                    <div class="card-image--inner"><?php the_post_thumbnail() ?></div>
                                </div>
                                <?php if ($tags) { ?>
                                    <div class="mobile-card-footer py-3">
                                        <?php foreach ($tags as $tag) { ?>
                                            <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </a>
                        </li>
                        <?php
                    }
                    $i++;
                endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>


        </ul>
    </div>
</section>
<section class="category-posts mt-5">
    <div class="category-posts--group">
        <div class="category-posts-group--inner mt-3">
            <div class="container">
                <ul class="row posts-list my-0">
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    if (have_posts()) :
                        $i = 0;
                        while (have_posts()) :
                            the_post();
                            if ($paged % 2 == 0) {
                                if ($i == 6 || $i == ($query->found_posts - 1)) {
                                    if ($ads_img = get_field('ad_2_banner', 'option')) { ?>
                                        <li class="mb-3 col-12 col-md-6 col-xl-8">
                                            <a href="<?php the_field('ad_2_link', 'option') ?>" <?php echo (strpos(get_field('ad_2_link', 'option'), site_url())) === false ? ' target="_blank"' : ''; ?>>
                                                <div class="ad" style="background-image: url(<?php echo $ads_img ?>)">
                                                    <div class="ad-content">
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="mb-3 col-12 col-md-6 col-xl-8">
                                            <div class="ad">
                                                <div class="ad-content">
                                                    <p><b><?php esc_html_e('Advertising space', ''); ?></b></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                            } else {

                                if ($paged == 1) {
                                    if ($i == 6 || $i == ($query->found_posts - 1)) {
                                        if ($block_1 = get_field('block_1', 'option')) {
                                            if (!$block_1['disable']) { ?>
                                                <div class="col-12 mb-3">
                                                    <?php get_template_part('parts/blocks/block-1', null, array(
                                                        'block' => $block_1
                                                    )) ?>
                                                </div>
                                            <?php }
                                        }
                                    }
                                }

                                if ($i == 7 || $i == ($query->found_posts - 1)) {
                                    if ($ads_img = get_field('ad_2_banner', 'option')) { ?>
                                        <li class="mb-3 col-12 col-md-6 col-xl-8">
                                            <a href="<?php the_field('ad_2_link', 'option') ?>" <?php echo (strpos(get_field('ad_2_link', 'option'), site_url())) === false ? ' target="_blank"' : ''; ?>>
                                                <div class="ad" style="background-image: url(<?php echo $ads_img ?>)">
                                                    <div class="ad-content">
                                                        <p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="mb-3 col-12 col-md-6 col-xl-8">
                                            <div class="ad">
                                                <div class="ad-content">
                                                    <p><b><?php esc_html_e('Advertising space', ''); ?></b></p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }

                            } ?>

                            <li class="d-flex  col-12 col-md-6 col-xl-4 mb-3">
                                <a class="card bg--disabled card--type-3" href="<?php the_permalink() ?>">
                                    <div class="zigzag">
                                        <?php if ($zizag = get_field('zigzag')) { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/card/<?php echo $zizag ?>.svg">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/card/type-1--color-yellow.svg">
                                        <?php } ?>
                                    </div>
                                    <div class="card-text">
                                        <div class="card-text--body">
                                            <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                            <?php
                                            if (get_the_excerpt()) {
                                                the_excerpt();
                                            } ?>
                                        </div>
                                        <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                            <div class="card-text--footer">
                                                <?php foreach ($tags as $tag) { ?>
                                                    <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="card-image">
                                        <div class="card-image--inner"><?php the_post_thumbnail() ?></div>
                                    </div>
                                    <?php if ($tags) { ?>
                                        <div class="mobile-card-footer py-3">
                                            <?php foreach ($tags as $tag) { ?>
                                                <div class="hashtag"><span>#<?php echo $tag->name ?></span></div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </a>
                            </li>

                            <?php
                            $i++;
                        endwhile;
                    endif; ?>

                </ul>
            </div>
            <?php if ($paged == 1) { ?>
                <div class="container-fluid no-p-sm container-sm">

                    <div class="sp-form-outer sp-force-hide">
                        <div id="sp-form-166304" sp-id="166304" sp-hash="27aa27f1b3255ce653849f16927262c1d16fe482605dfe9b0a0a7fa0e6167454"
                             sp-lang="ua" class="sp-form sp-form-regular sp-form-embed"
                             sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3Anull%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3Anull%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%2C%22utmEnable%22%3Afalse%7D">
                            <div class="sp-form-fields-wrapper">
                                <div class="sp-message">
                                    <div></div>
                                </div>
                                <form novalidate=""
                                      class="sp-element-container ui-sortable ui-droppable form form-subscribe bg--green form-xl--row">

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
                </div>
            <?php } else { ?>

                <?php if ($ads_img = get_field('ad_2_banner', 'option')) { ?>
                    <div class="container-fluid no-p-sm container-sm">
                        <a href="<?php the_field('ad_2_link', 'option') ?>" <?php echo (strpos(get_field('ad_2_link', 'option'), site_url())) === false ? ' target="_blank"' : ''; ?>>
                            <div class="ad" style="background-image: url(<?php echo $ads_img ?>)">
                                <div class="ad-content">
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="container-fluid no-p-sm container-sm">
                        <div class="ad">
                            <div class="ad-content">
                                <p><b><?php esc_html_e('Advertising space', ''); ?></b></p>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>
            <?php } ?>
        </div>
        <div class="container">
            <div class="row pt-5 mt-4 pb-3">
                <div class="col-12 d-flex justify-content-center">
                    <?php the_posts_pagination() ?>
                </div>
            </div>
        </div>
    </div>
</section>