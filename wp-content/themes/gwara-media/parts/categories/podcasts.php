<?php $seasons = get_term(PODCASTS_SEASONS_CAT_ID); ?>
<?php $themes = get_term(PODCASTS_THEMES_CAT_ID); ?>

<?php $parents = get_ancestors(get_queried_object_id(), 'category'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1><?php
                if (count($parents) < 2) {
                    echo get_term(PODCASTS_CAT_ID)->name;
                } else {
                    single_cat_title();
                } ?></h1>
        </div>
        <?php if (count($parents) < 2) { ?>
            <div class="col-12 col-lg-6 mt-4 mt-lg-0 d-flex align-items-end">
                <ul class="tabs-list d-flex align-items-center upper justify-content-md-end">
                    <li class="tabs-list-item <?php echo get_queried_object_id() == PODCASTS_CAT_ID ? 'tabs-list-item--active' : '' ?>">
                        <a href="<?php echo get_term_link(PODCASTS_CAT_ID) ?>"><?php echo $seasons->name ?></a></li>
                    <li class="tabs-list-item <?php echo get_queried_object_id() == PODCASTS_THEMES_CAT_ID ? 'tabs-list-item--active' : '' ?>">
                        <a href="<?php echo get_term_link($themes) ?>"><?php echo $themes->name ?></a></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
<?php if (count($parents) < 2) { ?>
    <section class="podcats-seazons pt-4 pt-md-5">
        <div class="container">
            <ul class="row podcats-seazons seasons-list">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $per_page = 16;

                $offset = $per_page * ($paged - 1);

                switch (get_queried_object_id()) {

                    case PODCASTS_CAT_ID:
                        $args = array(
                            'taxonomy' => 'category',
                            'parent' => PODCASTS_SEASONS_CAT_ID,
                            'number' => $per_page,
                            'offset' => $offset
                        );
                        break;
                    default:
                        $args = array(
                            'taxonomy' => 'category',
                            'parent' => get_queried_object_id(),
                            'number' => $per_page,
                            'offset' => $offset
                        );
                        break;
                }

                $terms = array_values(get_terms($args));
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) { ?>
                        <li class="podcats-seazons--item col-12 col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-5"><a
                                    href="<?php echo get_term_link($term) ?>">
                                <div class="podcast-season">
                                    <div class="podcast-season--image">
                                        <div class="icon icon--default">
                                            <svg preserveAspectRatio="none">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#sound"></use>
                                            </svg>
                                        </div>
                                        <?php if ($img = get_field('image', $term)) {
                                            echo wp_get_attachment_image($img);
                                        } ?>
                                    </div>
                                    <div class="podcast-season--text">
                                        <h3><?php echo $term->name ?></h3>
                                        <p><?php echo sprintf(_n('%s episod', '%s episods', $term->count, 'gm'), $term->count) ?></p>
                                    </div>
                                </div>
                            </a></li>
                    <?php }
                }
                ?>
            </ul>
            <div class="container">
                <div class="row pt-3 mt-4 pb-5 mb-3">
                    <div class="col-12 d-flex justify-content-center">
                        <?php
                        if ($terms) {
                            $big = 999999999;

                            $args['number'] = $big;
                            $terms = array_values(get_terms($args));


                            $links = paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, $paged),
                                'total' => ceil(count($terms) / $per_page)));

                            if ($links) {
                                echo '<div class="subcategories-pagination">' . $links . '</div>'; ?>
                                <button id="load-more-seasons" class="button button-load-more" type="button">
                                    <div class="load-btn-inner">
                                        <div class="button-content">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron-mob.svg"
                                                        media="(max-width: 768px)">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron.svg"
                                                     alt="&lt;">
                                            </picture>
                                            <div class="text-inner"><span><?php esc_html_e('More', 'gm'); ?></span>
                                            </div>
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron-mob.svg"
                                                        media="(max-width: 768px)">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron.svg"
                                                     alt="&gt;">
                                            </picture>
                                        </div>
                                        <div class="loader-content">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/svg/loader.svg">
                                        </div>
                                    </div>
                                </button>

                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
            $podcast = get_field('block_2', 'option');
            if ($podcast && !$podcast['diisabled']) {
                ?>
                <div class="stream bg--blue">
                    <div class="row">
                        <div class="col-12 col-lg-8 d-flex flex-wrap">
                            <div class="as-h2">
                                <h3><?php echo $podcast['title'] ?></h3>
                            </div>
                            <?php if ($podcast['authors']) { ?>
                                <ul>
                                    <?php foreach ($podcast['authors'] as $author) { ?>
                                        <li>
                                            <div class="stream-author">
                                                <div class="stream-author--avatar">
                                                    <?php echo wp_get_attachment_image($author['photo']) ?>
                                                </div>
                                                <div class="stream-author--info">
                                                    <div class="as-h3 upper--md">
                                                        <h4><?php echo $author['name'] ?></h4>
                                                    </div>
                                                    <small><?php echo $author['position'] ?></small>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-3 ml-xl-auto d-flex mt-4 pt-3 pt-md-4 pt-lg-0 mt-lg-0 stream-btn-inner">
                            <div class="zigzag d-none d-xl-block"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/zigzag/stream-zigzag.svg"
                                        alt="zigzag"></div>
                            <a href="<?php echo $podcast['link'] ?>" class="connect-btn button" aria-label="connect">
                                <div class="inner"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/svg/connect-play.svg"><span><?php esc_html_e('Join', 'gm'); ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <div class="container">
        <div class="row py-3 py-lg-5">
            <div class="col-12">
                <?php if ($banner = get_field('ad_2_banner', 'option')) { ?>
                    <a href="<?php the_field('ad_2_link', 'option') ?>" <?php echo (strpos(get_field('ad_2_link', 'option'), site_url())) === false ? ' target="_blank"' : ''; ?>>
                        <div class="ad" style="background-image: url(<?php echo $banner ?>)">
                            <div class="ad-content">
                                <b>&nbsp</b>
                            </div>
                        </div>
                    </a>
                <?php } else { ?>
                    <div class="ad">
                        <div class="ad-content"><b><?php esc_html_e('Advertising space', 'gm'); ?></b></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<section class="podcasts-section py-3">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 16,
        'cat' => get_queried_object_id(),
        'paged' => $paged
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
        <div class="container-fluid container-md">
            <div class="podcasts-all">
                <div class="podcast-list-inner bg--yellow">
                    <ul class="podcast-list podcast-list-items">
                        <?php while ($query->have_posts()) : $query->the_post();
                            get_template_part('parts/posts/post-audio-mini');
                        endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container-fluid no-p-sm container-sm py-5 mt-5 mt-lg-0">

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
    <div class="container">
        <div class="row pt-5 mt-md-4 pb-0">
            <div class="col-12 d-flex justify-content-center">
                <?php
                if ($query) {
                    $big = 999999999; // need an unlikely integer


                    echo '<div class="podcasts-pagination">' . paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, $paged),
                            'total' => $query->max_num_pages
                        )) . '</div>';
                }
                ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>