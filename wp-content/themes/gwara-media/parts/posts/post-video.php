<?php get_header() ?>

    <article class="article">
        <div class="container">
            <div class="swiper-container">
                <h1 class="block-title"><?php the_title() ?></h1>
                <div class="article-heading-zigzag d-lg-block">
                    <img src="https://gwaramedia.com/wp-content/themes/gwara-media/img/zigzag/article-zigzag.svg"
                         alt="">
                </div>

                <div class="slide-img">
                    <div class="yt-lazyload" data-id="<?php the_field('video_link') ?>" data-thumb data-logo="3"></div>

                    <?php // echo wp_get_attachment_image(get_field('video_image'), 'full') ?>

                    <?php if ($prev = get_previous_post(true)) { ?>
                        <a href="<?php echo get_permalink($prev) ?>" class="navigation-arrow navigation-arrow-left"></a>
                    <?php } ?>
                    <?php if ($next = get_next_post(true)) { ?>
                        <a href="<?php echo get_permalink($next) ?>"
                           class="navigation-arrow navigation-arrow-right"></a>
                    <?php } ?>
                </div>

            </div>
            <div class="article-body row pt-3 pt-lg-5 mt-1 mt-lg-0">
                <aside class="article-body--left col-12 col-lg-3 sticky-parent">
                    <div class="article-content sticky-el" data-sticky-breakpoint="992px"
                         style="position: sticky; top: 70px;">
                        <div class="author">
                            <div class="author-avatar"><?php echo get_avatar(get_the_author_meta('ID')) ?></div>
                            <div class="author-info">
                                <h4><?php the_author() ?></h4>
                                <p><?php echo get_the_date() ?></p>
                            </div>

                        </div>
                    </div>
                </aside>
                <main class="article-body--content col-12 col-lg-5 col-xl-6">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <section class="content--text">
                                <?php if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        the_content();
                                    }
                                } ?>
                                <?php get_template_part('parts/posts/tags') ?>
                                <?php get_template_part('parts/posts/share') ?>
                                <script type="text/javascript"
                                        src="//web.webformscr.com/apps/fc3/build/default-handler.js?1600674128293"></script>
                            </section>
                        </div>
                    </div>
                </main>
                <aside class="article-body--right col-12 col-lg-4 col-xl-3">

                </aside>
            </div>
        </div>
    </article>

    <section class="podcasts-section py-3">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'category__in' => PODCASTS_CAT_ID
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
        <?php wp_reset_postdata(); ?>

        <div class="container-fluid no-p-sm container-sm py-5 mt-5 mt-lg-0">


            <div class="sp-form-outer sp-force-hide">
                <div id="sp-form-166304" sp-id="166304"
                     sp-hash="27aa27f1b3255ce653849f16927262c1d16fe482605dfe9b0a0a7fa0e6167454"
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
                                            <li class="social-list--item"><a href="<?php echo $item['link'] ?>"
                                                                             target="_blank">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/form-zigzag.svg"
                                     alt="alt">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript"
                    src="//web.webformscr.com/apps/fc3/build/default-handler.js?1600674128293"></script>
            <!-- /Subscription Form -->


        </div>

    </section>

    <style>
        .article section.content--text {
            border: none;
        }

        .page-short .podcasts-section .podcast-list-inner {
            padding: 20px 0 0 0;
        }

        .page-short .podcasts-section .podcast-list--item {
            margin: 0
        }

        .play-btn {
            margin-top: 60px;
            cursor: pointer;
        }


        .owl-next span, .owl-prev span {
            display: none
        }

        .owl-next, .owl-prev {
            width: 32px;
            height: 50px;
            background: url('/wp-content/themes/gwara-media/img/arrows/arrow_right.svg') no-repeat !important;
            background-size: cover !important;
            outline: none;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
        }

        .owl-next {
            transform: rotate(180deg);
            right: 50px
        }

        .owl-prev {
            left: 50px
        }

        .article-heading-image {
            position: relative;
        }

        .article-heading-image img {
            position: relative;
        }

        .swiper-slide video {
            object-fit: cover;
            height: 100%;
            width: 100%;
            min-height: 180px;
        }

        .swiper-container {
            position: relative;
        }

        .block-title {
            font-family: 'Formular';
            font-style: normal;
            font-weight: 900;
            font-size: 24px;
            line-height: 29px;
            text-transform: uppercase;
            color: #000000;
            display: block;
            margin-bottom: 20px
        }


        @media (min-width: 1024px) {
            .block-title {
                font-size: 48px;
                text-transform: uppercase;
                color: #FFFFFF;
                position: absolute;
                top: 100px;
                left: 0;
                right: 0;
                display: flex;
                z-index: 99;
                align-items: center;
                justify-content: center;
            }
        }


        .play-btn {
            position: absolute;
            top: 0;
            z-index: 999;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-slide {
            min-height: 180px;
        }

        .swiper-slide img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            min-height: 180px;
        }

        @media (max-width: 767px) {
            .play-btn svg {
                width: 60px
            }

            .owl-prev {
                left: 20px
            }

            .owl-next {
                right: 20px
            }
        }

        .icon {
            max-width: 25px
        }

        .icon--share {
            max-width: 50px
        }

        .addtoany_list a {
            margin: 0 15px
        }

        .slide-img {
            position: relative;
            z-index: 9
        }

        .slide-img img {
            width: 100%;
            height: 100%;
        }

        .navigation-arrow {
            width: 32px;
            height: 50px;
            background: url('/wp-content/themes/gwara-media/img/arrows/arrow_right.svg') no-repeat;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
        }

        .navigation-arrow-left {
            left: 25px;
        }

        .navigation-arrow-right {
            right: 25px;
            transform: rotate(180deg);
        }

    </style>
    <!--    <style>-->
    <!--        .article section.content--text {-->
    <!--            border: none;-->
    <!--        }-->
    <!---->
    <!--        .page-short .podcasts-section .podcast-list-inner {-->
    <!--            padding: 20px 0 0 0;-->
    <!--        }-->
    <!---->
    <!--        .page-short .podcasts-section .podcast-list--item {-->
    <!--            margin: 0-->
    <!--        }-->
    <!---->
    <!--        .play-btn {-->
    <!--            margin-top: 60px;-->
    <!--            cursor: pointer;-->
    <!--        }-->
    <!---->
    <!---->
    <!--        .owl-next span, .owl-prev span {-->
    <!--            display: none-->
    <!--        }-->
    <!---->
    <!--        .owl-next, .owl-prev {-->
    <!--            width: 32px;-->
    <!--            height: 50px;-->
    <!--            background: url('/wp-content/themes/gwara-media/img/arrows/arrow_right.svg') no-repeat !important;-->
    <!--            background-size: cover !important;-->
    <!--            outline: none;-->
    <!--            position: absolute;-->
    <!--            top: 0;-->
    <!--            bottom: 0;-->
    <!--            margin: auto;-->
    <!--        }-->
    <!---->
    <!--        .owl-next {-->
    <!--            transform: rotate(180deg); -->
    <!--            right: 50px-->
    <!--        }-->
    <!---->
    <!--        .owl-prev {-->
    <!--            left: 50px-->
    <!--        }-->
    <!---->
    <!--        .article-heading-image {-->
    <!--            position: relative;-->
    <!--        }-->
    <!---->
    <!--        .article-heading-image img {-->
    <!--            position: relative;-->
    <!--        }-->
    <!---->
    <!--        .swiper-slide video {-->
    <!--            object-fit: cover;-->
    <!--            height: 100%;-->
    <!--            width: 100%;-->
    <!--            min-height: 180px;-->
    <!--        }-->
    <!---->
    <!--        .swiper-container {-->
    <!--            position: relative;-->
    <!--        }-->
    <!---->
    <!--        .block-title {-->
    <!--            font-family: 'Formular';-->
    <!--            font-style: normal;-->
    <!--            font-weight: 900;-->
    <!--            font-size: 24px;-->
    <!--            line-height: 29px;-->
    <!--            text-transform: uppercase;-->
    <!--            color: #000000;-->
    <!--            display: block;-->
    <!--            margin-bottom: 20px-->
    <!--        }-->
    <!---->
    <!---->
    <!--        @media (min-width: 1024px) {-->
    <!--            .block-title {-->
    <!--                font-size: 48px;-->
    <!--                text-transform: uppercase;-->
    <!--                color: #FFFFFF;-->
    <!--                position: absolute;-->
    <!--                top: 100px;-->
    <!--                left: 0;-->
    <!--                right: 0;-->
    <!--                display: flex;-->
    <!--                z-index: 99;-->
    <!--                align-items: center;-->
    <!--                justify-content: center;-->
    <!--            }-->
    <!--        }-->
    <!---->
    <!---->
    <!--        .play-btn {-->
    <!--            position: absolute;-->
    <!--            top: 0;-->
    <!--            z-index: 999;-->
    <!--            bottom: 0;-->
    <!--            left: 0;-->
    <!--            right: 0;-->
    <!--            margin: auto;-->
    <!--            display: flex;-->
    <!--            align-items: center;-->
    <!--            justify-content: center;-->
    <!--        }-->
    <!---->
    <!--        .swiper-slide {-->
    <!--            min-height: 180px;-->
    <!--        }-->
    <!---->
    <!--        .swiper-slide img {-->
    <!--            object-fit: cover;-->
    <!--            height: 100%;-->
    <!--            width: 100%;-->
    <!--            min-height: 180px;-->
    <!--        }-->
    <!---->
    <!--        @media (max-width: 767px) {-->
    <!--            .play-btn svg {-->
    <!--                width: 60px-->
    <!--            }-->
    <!---->
    <!--            .owl-prev {-->
    <!--                left: 20px-->
    <!--            }-->
    <!---->
    <!--            .owl-next {-->
    <!--                right: 20px-->
    <!--            }-->
    <!--        }-->
    <!---->
    <!--        .icon {-->
    <!--            max-width: 25px-->
    <!--        }-->
    <!---->
    <!--        .icon--share {-->
    <!--            max-width: 50px-->
    <!--        }-->
    <!---->
    <!--        .addtoany_list a {-->
    <!--            margin: 0 15px-->
    <!--        }-->
    <!---->
    <!--    </style>-->


<?php get_footer() ?>