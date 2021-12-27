<?php get_header(); ?>

<section class="section-hero">
    <div class="index-hero-zigzag d-none d-lg-block"><img
                src="<?php echo get_template_directory_uri(); ?>/img/zigzag/lg-violet-zigzag.svg"></div>
    <div class="container">
        <div class="marketing py-3 text--center">
            <?php if (get_field('ad_1_enable', 'option')) { ?>
                <a href="<?php the_field('ad_1_link', 'option') ?>" target="_blank">
                    <img src="<?php the_field('ad_1_banner', 'option') ?>" alt="">
                </a>
            <?php } ?>
        </div>
        <?php
        $menu = get_terms(array(
            'taxonomy' => 'category',
            'parent' => 0
        ));
        ?>
        <div class="row" id="page-menu">
            <div class="col-4 col-xxl-3 d-none d-lg-block relative menu-items-wrapper pt-5">
                <?php if ($menu) { ?>
                    <ul class="menu-list">
                        <?php foreach ($menu as $index => $item) { ?>
                            <li class="menu-list--item submenu-trigger <?php echo $index == 0 ? 'menu-list--item--active' : '' ?>"
                                data-target="#<?php echo $item->slug ?>--page"><a
                                        href="<?php echo get_term_link($item) ?>"><?php echo $item->name ?></a></li>
                        <?php } ?>
                    </ul>
                    <div class="menu-divider">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/zigzag/menu-divider-mob.svg"
                                    media="(max-width:992px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/menu-divider.svg">
                        </picture>
                    </div>
                <?php } ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container' => false,
                    'menu_class' => 'menu-list menu-list-ext',
                    'walker' => new solar_walker
                ));
                ?>
            </div>
            <div class="col-12 col-lg-9 col-xl-9 bg--yellow d-flex submenu-wrapper">
                <?php if ($menu) { ?>
                    <?php foreach ($menu as $index => $item) { ?>
                        <?php
                        $submenu = get_terms(array(
                            'taxonomy' => 'category',
                            'parent' => $item->term_id
                        ));
                        if ($submenu) {
                            ?>
                            <div class="submenu-content-item w-100" id="<?php echo $item->slug ?>--page">
                                <div class="container container-lg-fluid d-flex">
                                    <div class="row w-100 no-gutters">
                                        <div class="col-12 d-lg-none">
                                            <div class="back-btn-wrapper">
                                                <button class="back-btn button" type="button">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon icon--default">
                                                            <svg preserveAspectRatio="none">
                                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#thin-arrow"></use>
                                                            </svg>
                                                        </div>
                                                        <span><?php echo $item->name ?></span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                                            <ul class="menu-list submenu-list w-100 pl-0 pl-lg-5">
                                                <?php foreach ($submenu as $subitem) { ?>
                                                    <li class="menu-list--item submenu-list--item"><a
                                                                href="<?php echo get_term_link($subitem) ?>"><?php echo $subitem->name ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="d-none d-lg-flex col-8 col-xxl-9">
                                            <div class="submenu-small-cards--wrapper">
                                                <?php
                                                $args = array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 6,
                                                    'cat' => $item->term_id
                                                );
                                                $query = new WP_Query($args);

                                                if ($query->have_posts()) : $i = 1; ?>
                                                    <?php while ($query->have_posts()) : $query->the_post();
                                                        if ($i % 2 != 0) {
                                                            echo '<ul class="pr-5 m-0 submenu-small-cards">';
                                                        } ?>

                                                        <div class="small-card-inner">
                                                            <div class="card--type-small card"><a
                                                                        href="<?php the_permalink() ?>">
                                                                    <div class="card-image">
                                                                        <div class="card-image--inner">
                                                                            <?php the_post_thumbnail('medium', array('
                                                                            class' => 'skip-lazy')
                                                                            ) ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-text">
                                                                        <p><?php echo wph_cut_by_words(30, get_the_title()) ?></p>
                                                                    </div>
                                                                </a></div>
                                                        </div>

                                                        <?php if ($i % 2 == 0 || $i == $query->found_posts) {
                                                            echo '</ul>';
                                                        }
                                                        $i++; endwhile; ?>
                                                <?php endif; ?>
                                                <?php wp_reset_postdata(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>

                <?php } ?>
            </div>
            <div class="col-12 col-lg-8 col-xxl-9">
                <div class="section-body relative">
                    <div class="row hero-cards">
                        <div class="col-12 col-sm-6 col-xxl-4 mb-3">
                            <?php
                            $exclude = get_categories(array(
                                'parent' => PODCASTS_CAT_ID,
                                'fields' => 'ids'
                            ));
                            if ($exclude) {
                                $exclude[] = PODCASTS_CAT_ID;
                            } else {
                                $exclude = array(PODCASTS_CAT_ID);
                            }
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'category__not_in' => $exclude
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) : $i = 1;
                                while ($query->have_posts()) : $query->the_post();
                                    if ($i == 1) { ?>
                                        <div class="inner"><a class="card card--type-4 bg--disabled"
                                                              href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer"><b><span><?php the_author() ?></span></b>
                                                    </div>
                                                </div>
                                                <div class="card-image">
                                                    <div class="card-image--inner"><?php the_post_thumbnail() ?></div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    } else { ?>
                                        <div class="inner mt-3">
                                            <a class="card bg--disabled card--type-1 no-image"
                                               href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer">
                                                        <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                            foreach ($tags as $tag) { ?>
                                                                <div class="hashtag">
                                                                    <span>#<?php echo $tag->name ?></span></div>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <span></span>
                                                <div class="mobile-card-footer py-3">
                                                    <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                        foreach ($tags as $tag) { ?>
                                                            <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                            </div>
                                                        <?php }
                                                    } ?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                    $i++; endwhile;
                            endif;
                            wp_reset_postdata(); ?>
                        </div>
                        <div class="col-12 col-sm-6 col-xxl-4 mb-3">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'cat' => READ_CAT_ID,
                                'offset' => 2
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) : $i = 1;
                                while ($query->have_posts()) : $query->the_post();
                                    if ($i == 1) { ?>
                                        <div class="inner"><a class="card card--type-4 bg--disabled"
                                                              href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer"><b><span><?php the_author() ?></span></b>
                                                    </div>
                                                </div>
                                                <div class="card-image">
                                                    <div class="card-image--inner"><?php the_post_thumbnail() ?></div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    } else { ?>
                                        <div class="inner mt-3">
                                            <a class="card bg--disabled card--type-1 no-image"
                                               href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer">
                                                        <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                            foreach ($tags as $tag) { ?>
                                                                <div class="hashtag">
                                                                    <span>#<?php echo $tag->name ?></span></div>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <span></span>
                                                <div class="mobile-card-footer py-3">
                                                    <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                        foreach ($tags as $tag) { ?>
                                                            <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                            </div>
                                                        <?php }
                                                    } ?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                    $i++; endwhile;
                            endif;
                            wp_reset_postdata(); ?>
                        </div>
                        <div class="col-12 col-sm-6 col-xxl-4 mb-3">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'cat' => READ_CAT_ID,
                                'offset' => 4
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) : $i = 1;
                                while ($query->have_posts()) : $query->the_post();
                                    if ($i == 1) { ?>
                                        <div class="inner"><a class="card card--type-4 bg--disabled"
                                                              href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer"><b><span><?php the_author() ?></span></b>
                                                    </div>
                                                </div>
                                                <div class="card-image">
                                                    <div class="card-image--inner"><?php the_post_thumbnail() ?></div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                    } else { ?>
                                        <div class="inner mt-3">
                                            <a class="card bg--disabled card--type-1 no-image"
                                               href="<?php the_permalink() ?>">
                                                <div class="card-text">
                                                    <div class="card-text--body">
                                                        <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                    </div>
                                                    <div class="card-text--footer">
                                                        <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                            foreach ($tags as $tag) { ?>
                                                                <div class="hashtag">
                                                                    <span>#<?php echo $tag->name ?></span></div>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                </div>
                                                <span></span>
                                                <div class="mobile-card-footer py-3">
                                                    <?php if ($tags = wp_get_post_tags($post->ID)) {
                                                        foreach ($tags as $tag) { ?>
                                                            <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                            </div>
                                                        <?php }
                                                    } ?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                    $i++; endwhile;
                            endif;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/run-line') ?>

<div class="section section-news">
    <?php if ($block_1 = get_field('block_1', 'option')) {
        if (!$block_1['disable']) { ?>
            <div class="container-sm">
                <div class="row">
                    <div class="col-12">
                        <?php get_template_part('parts/blocks/block-1', null, array(
                            'block' => $block_1
                        )) ?>
                    </div>
                </div>
            </div>
        <?php }
    } ?>
    <div class="section-content">
        <div class="container">
            <div class="section-title arrow-type-1--color--green">
                <h2><?php esc_html_e('Reality', 'gm'); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="news-inner zigzag-overlay-1">
                <div class="zigzag d-none d-md-block"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/zigzag/overlay/overlay-rose-type-1.svg">
                </div>
                <div class="row pb-4">
                    <div class="col-12 col-lg-7 col-xxl-8 d-flex">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category__in' => NEWS_CAT_ID
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) : ?>
                            <ul class="news-cards-list row no-gutters">
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <li class="news-cards-list--item col-12 col-sm-6 col-lg-6 col-xl-6 d-flex">
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
                                                    <?php if (get_the_excerpt()) {
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
                                                <div class="card-image--inner">
                                                    <?php the_post_thumbnail() ?>
                                                </div>
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
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <div class="col-12 col-lg-5 col-xxl-4 d-xxl-flex mt-4 mt-lg-0 index-form-inner">
                        <div class="form form-subscribe bg--green ">
                            <div class="form-content">
                                <legend><?php _e('Subscribe<br>and follow us', 'gm'); ?></legend>
                                <?php if ($social_links = get_field('social_links', 'option')) { ?>
                                    <ul class="social-list d-flex align-items-center">
                                        <?php foreach ($social_links as $item) { ?>
                                            <li class="social-list--item"><a href="<?php echo $item['link'] ?>"
                                                                             target="_blank">
                                                    <div class="icon icon--default">
                                                        <?php echo wp_get_attachment_image($item['icon'], 'thumbnail') ?>
                                                    </div>
                                                </a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                                <div class="sp-form-outer sp-force-hide">
                                    <div id="sp-form-166304" sp-id="166304"
                                         sp-hash="27aa27f1b3255ce653849f16927262c1d16fe482605dfe9b0a0a7fa0e6167454"
                                         sp-lang="ua" class="sp-form sp-form-regular sp-form-embed"
                                         sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3Anull%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3Anull%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%2C%22utmEnable%22%3Afalse%7D">
                                        <div class="sp-form-fields-wrapper">
                                            <div class="sp-message">
                                                <div></div>
                                            </div>
                                            <form novalidate="" class="sp-element-container ui-sortable ui-droppable">
                                                <div class="input-inner">
                                                    <div class="sp-field "
                                                         sp-id="sp-df85b116-f883-4e47-b4a5-8420cc42822c">
                                                        <input type="email" sp-type="email" name="sform[email]"
                                                               class="theme-input bg--light"
                                                               placeholder="<?php esc_html_e('Enter your e-mail', 'gm'); ?>"
                                                               sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D0%BE%D0%B2'%D1%8F%D0%B7%D0%BA%D0%BE%D0%B2%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D1%96%D1%80%D0%BD%D0%B0%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%D0%B0%22%7D"
                                                               required="required">
                                                    </div>
                                                </div>
                                                <button type="submit" id="sp-d2141fde-7bec-4612-b195-19a6f7e13445"
                                                        class="button button--yellow"><?php esc_html_e('Submit', 'gm'); ?></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript"
                                        src="//web.webformscr.com/apps/fc3/build/default-handler.js?1600674128293"></script>

                                <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/form-zigzag.svg"
                                     alt="alt">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'category__in' => PODCASTS_CAT_ID
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
            <div class="container-fluid container-lg mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="podcasts-wrap podcasts-inner">
                            <div class="podcast--birds d-none d-xxl-block">
                                <div class="podcast--bird"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/svg/podcasts-bird.svg">
                                </div>
                                <div class="podcast--bird"><img
                                            src="<?php echo get_template_directory_uri(); ?>/img/svg/podcasts-bird.svg">
                                </div>
                            </div>


                            <?php
                            $background = null;
                            if (ICL_LANGUAGE_CODE != apply_filters('wpml_default_language', NULL)) {
                                $background = get_template_directory_uri() . '/img/svg/podcasts-bg-' . ICL_LANGUAGE_CODE . '.svg';
                            } ?>

                            <div class="podcast-list-inner bg--yellow"<?php echo $background ? 'style="background-image: url(' . $background . ')"' : '' ?>>
                                <ul class="podcast-list">
                                    <?php while ($query->have_posts()) : $query->the_post();
                                        get_template_part('parts/posts/post-audio-mini');
                                    endwhile; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-3 pr-3 pr-lg-0 d-flex justify-content-center justify-content-md-end"><a
                                    class="button more-link more-link--arrow more-link--color-green"
                                    href="<?php echo get_term_link(PODCASTS_CAT_ID) ?>">
                                <div class="d-flex align-items-center">
                                    <span><?php esc_html_e('More podcasts', 'gm'); ?></span>
                                    <div class="arrow"><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/arrows/arrow-green.svg"
                                                alt="arrow"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>


    </div>
</div>
<?php
$terms = array_values(get_terms(array(
    'taxonomy' => 'category',
    'parent' => READ_CAT_ID,
)));
if ($terms && !is_wp_error($terms)) { ?>
    <section class="section section-news--category">
        <div class="border-bottom d-none d-lg-block"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/svg/news-category-bottom.svg"></div>
        <div class="news-category--inner zigzag-overlay-2">
            <div class="zigzag d-none d-md-block"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/zigzag/overlay/overlay-blue-type-3--color-violet.svg">
            </div>
            <div class="container-fluid container-md"></div>

            <div class="container-fluid px-0">
                <div class="ticker-links-wrapper">
                    <div class="categoryes-wrapper container-lg">
                        <ul class="ticker-category-list d-flex align-items-center">
                            <?php foreach ($terms as $term) { ?>
                                <li class="ticker-category-list--item"><a
                                            href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="ticker-wrapper bg--light ticker-links--wrapper index-links-ticker">
                        <ul class="ticker-inner d-flex flex-nowrap ticker-links-list">
                            <?php for ($i = 0; $i <= 10; $i++) { ?>
                                <li class="ticker-links-list--item"><span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/link-overlay.svg">
                                    </span></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="d-lg-none ticker-arrow container pb-4"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/ticker-arrow.svg"></div>
            </div>

            <div class="container mt-2">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'cat' => $terms[0]->term_taxonomy_id
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : ?>
                    <div class="row">
                        <?php $i = 0;
                        while ($query->have_posts()) : $query->the_post();
                            if ($i == 0) { ?>
                                <div class="col-12 pb-4"><a class="card bg--disabled card--type-2"
                                                            href="<?php the_permalink() ?>">
                                        <div class="card-text">
                                            <div class="card-text--body">
                                                <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                                <?php the_excerpt() ?>
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
                                            <div class="card-image--inner">
                                                <?php the_post_thumbnail() ?>
                                            </div>
                                        </div>
                                        <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                            <div class="mobile-card-footer py-3">
                                                <?php foreach ($tags as $tag) { ?>
                                                    <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </a>
                                </div>
                            <?php }
                            if ($i > 0 && $i < 4) { ?>
                                <div class="col-12 col-sm-4 pb-2 col-md-4 mb-4"><a
                                            class="card bg--disabled card--type-1"
                                            href="<?php the_permalink() ?>">
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
                                            <div class="card-image--inner">
                                                <?php the_post_thumbnail() ?>
                                            </div>
                                        </div>
                                        <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                            <div class="mobile-card-footer py-3">
                                                <?php foreach ($tags as $tag) { ?>
                                                    <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </a>
                                </div>
                            <?php }
                            if ($i >= 4) { ?>
                                <div class="col-12 col-md-6 mb-4 mb-md-0"><a class="card bg--disabled card--type-3"
                                                                             href="<?php the_permalink() ?>">
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
                                                <?php the_excerpt() ?>
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
                                            <div class="card-image--inner">
                                                <?php the_post_thumbnail() ?>
                                            </div>
                                        </div>
                                        <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                            <div class="mobile-card-footer py-3">
                                                <?php foreach ($tags as $tag) { ?>
                                                    <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </a>
                                </div>
                            <?php }
                            $i++; endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

                <?php if (count($query->posts) == 6 && $terms[0]) { ?>
                    <div class="row section-footer">
                        <div class="col-12 d-flex justify-content-center">
                            <a href="<?php echo get_term_link(READ_CAT_ID) ?>"
                               class="button button-load-more" type="button">
                                <div class="load-btn-inner">
                                    <div class="button-content">
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron-mob.svg"
                                                    media="(max-width: 768px)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron.svg"
                                                 alt="&lt;">
                                        </picture>
                                        <div class="text-inner"><span><?php esc_html_e('More', 'gm'); ?></span></div>
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
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php

$users = get_users_ordered_by_post_date([
    'number' => '6',
    'paged' => 1,
    'has_published_posts' => true,
    'exclude' => array(1, 2, 4)
]);
if ($users) {
    ?>
    <section class="authors">
        <div class="container">
            <div class="authors--heading flex-column flex-lg-row d-flex align-lg-items-center justify-content-lg-between">
                <div class="section-title arrow-type-2--color--violet">
                    <h2><?php esc_html_e('Authors', 'gm'); ?></h2>
                </div>
                <div class="autors-inner"><a class="button more-link more-link--arrow more-link--color-rose"
                                             href="<?php echo get_permalink(AUTHORS_PAGE) ?>">
                        <div class="d-flex align-items-center"><span><?php esc_html_e('All authors', 'gm'); ?></span>
                            <div class="arrow"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/arrows/arrow-rose.svg"
                                        alt="arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="authors--body">
                <div class="athors-wrapper skew-wrapper-lg skew-bg-lg--yellow">
                    <div class="row">
                        <?php foreach ($users as $user) {
                            $userdata = get_user_meta($user->ID); ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-3">
                                <div class="card card--author bg--disabled"><a
                                            href="<?php echo get_author_posts_url($user->ID) ?>">
                                        <div class="card-image">
                                            <div class="card-image--inner">
                                                <?php echo get_avatar($user->ID, 300) ?>
                                            </div>
                                        </div>
                                        <div class="card-text text--center text-md--left">
                                            <h3><?php _e($user->display_name, 'Authors') ?></h3>
                                            <?php if (isset($userdata['description'][0])) { ?>
                                                <span><?php echo $userdata['description'][0]; ?></span>
                                            <?php } ?>
                                            <p><b><?php esc_html_e('Latest new', 'gm'); ?>:</b></p>
                                            <p>
                                                <?php
                                                $args = array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'author' => $user->ID
                                                );
                                                $query = new WP_Query($args);
                                                if ($query->have_posts()) :
                                                    while ($query->have_posts()) : $query->the_post();
                                                        echo wph_cut_by_words(30, get_the_title());
                                                    endwhile;
                                                endif;
                                                wp_reset_postdata(); ?>
                                            </p>
                                        </div>
                                    </a></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (count($users) == 6) { ?>
            <div class="d-flex justify-content-center py-5 mt-lg-3">
                <a href="<?php echo get_permalink(AUTHORS_PAGE) ?>" class="button button-load-more" type="button">
                    <div class="load-btn-inner">
                        <div class="button-content">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron-mob.svg"
                                        media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/load-more-chevron.svg"
                                     alt="&lt;">
                            </picture>
                            <div class="text-inner"><span><?php esc_html_e('More', 'gm'); ?></span></div>
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
                </a>
            </div>
        <?php } ?>
    </section>
<?php } ?>
<?php get_footer() ?>
