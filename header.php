<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<meta name="it-rating" content="it-rat-2f4395f219683f81a87695a2b2169672" />
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <?php wp_head() ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-73107892-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-73107892-13');
    </script>

    <script type='text/javascript'>
        window.smartlook || (function (d) {
            var o = smartlook = function () {
                o.api.push(arguments)
            }, h = d.getElementsByTagName('head')[0];
            var c = d.createElement('script');
            o.api = new Array();
            c.async = true;
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.src = 'https://rec.smartlook.com/recorder.js';
            h.appendChild(c);
        })(document);
        smartlook('init', 'a74721e3de6aff1b68148e7fba671ba5fad09f37');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MX2PD7D');</script>
    <!-- End Google Tag Manager -->


</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX2PD7D"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page-content">

    <header class="header<?php echo is_front_page() ? ' header--menu-btn-default-hidden' : '' ?> bg--yellow bg-lg--transparent">
        <div class="main-menu" id="main-menu">
            <?php
            $menu = get_terms(array(
                'taxonomy' => 'category',
                'parent' => 0
            ));
            ?>
            <div class="main-menu--wrapper bg--yellow bg-lg--light">
                <div class="container">
                    <div class="row w-100 m-0">
                        <!-- menu-->
                        <div class="col-12 col-lg-3 col-xl-3 menu-items-wrapper">
                            <?php if ($menu) { ?>
                                <ul class="menu-list">
                                    <?php foreach ($menu as $index => $item) { ?>
                                        <li class="menu-list--item submenu-trigger <?php echo $index == 0 ? 'menu-list--item--active' : '' ?>"
                                            data-target="#<?php echo $item->slug ?>"><a
                                                    href="<?php echo get_term_link($item) ?>"><?php echo $item->name ?></a>
                                        </li>
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
                            <div class="d-lg-none pt-2 mt-5 pt-2 w-100 d-flex justify-content-center align-items-center">
                                <?php if (!is_user_logged_in()) { ?>
                                    <div class="btn--wrapper modal-trigger" data-target="#login-modal">
                                        <button class="button button--icon button--login" type="button"
                                                id="login-trigger">
                                            <div class="button--inner">
                                                <div class="icon icon--default">
                                                    <svg preserveAspectRatio="none">
                                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#user"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </button>
                                        <span><?php esc_html_e('Log In', 'gm'); ?></span>
                                    </div>
                                <?php } else { ?>
                                    <a class="btn--wrapper modal-trigger"
                                       href="<?php echo get_permalink(MY_ACCOUNT) ?>">
                                        <button class="button button--icon button--login" type="button"
                                                id="login-trigger">
                                            <div class="button--inner">
                                                <div class="icon icon--default">
                                                    <svg preserveAspectRatio="none">
                                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#user"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </button>
                                        <span><?php echo get_the_title(MY_ACCOUNT) ?></span>
                                    </a>
                                <?php } ?>


                            </div>
                            <?php
                            if (function_exists('icl_get_languages')) { ?>
                                <ul class="lang-select d-flex pt-4 pb-5 w-100 justify-content-center align-items-center d-lg-none">
                                    <?php $languages = icl_get_languages('skip_missing=0&orderby=code&order=desc');
                                    if (!empty($languages)) {
                                        foreach ($languages as $l) {
                                            $class = $l['active'] ? 'lang-select--item--active' : NULL;
                                            echo '<li class="lang-select--item ' . $class . ' "><a href="' . $l['url'] . '">' . $l['language_code'] . '</a></li>';
                                        }
                                    } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <!-- content-->
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
                                        <div class="submenu-content-item<?php echo $index == 1 ? ' active-default' : '' ?> w-100"
                                             id="<?php echo $item->slug ?>">

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
                                                    <div class="col-12 col-lg-4 col-xxl-3 d-flex align-items-lg-center">
                                                        <ul class="menu-list submenu-list w-100 pl-0 pl-lg-5">
                                                            <?php foreach ($submenu as $subitem) { ?>
                                                                <li class="menu-list--item submenu-list--item"><a
                                                                            href="<?php echo get_term_link($subitem) ?>"><?php echo $subitem->name ?></a>
                                                                </li>
                                                            <?php } ?>

                                                            <li class="d-lg-none pt-2 mt-5 pt-2 w-100 d-flex justify-content-center align-items-center">
                                                                <a class="btn--wrapper modal-trigger"
                                                                   href="<?php echo get_term_link($item->term_id) ?>">
                                                                    <span><?php echo sprintf(__('Go to "%s"', 'gm'), $item->name); ?></span>
                                                                </a>


                                                            </li>

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
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-navbar bg-lg--yellow">
                <div class="row align-items-center d-flex">
                    <div class="col-2 col-xl-1 order-1">
                        <div class="d-flex justify-content-center justify-content-xl-end">
                            <button class="button button--icon button--menu" type="button" id="menu-trigger">
                                <div class="button--inner">
                                    <div class="icon icon--menu">
                                        <svg preserveAspectRatio="none">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#menu"></use>
                                        </svg>
                                    </div>
                                    <div class="icon icon--close">
                                        <svg preserveAspectRatio="none">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#close"></use>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="col-2 col-xl-2 order-3 order-md-1 pl-md-4">
                        <div class="d-flex justify-content-xl-center">
                            <div class="btn--wrapper search-show-trigger">
                                <button class="button button--icon button--search" type="button" id="search-trigger">
                                    <div class="button--inner">
                                        <div class="icon icon--search">
                                            <svg preserveAspectRatio="none">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#search"></use>
                                            </svg>
                                        </div>
                                        <div class="icon icon--close">
                                            <svg preserveAspectRatio="none">
                                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#close"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                                <span class="hidden"><?php esc_html_e('search', 'gm'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-md-4 col-xl-6 order-2 order-md-3">
                        <div class="d-flex justify-content-center"><a class="logo"
                                                                      onclick="gtag('event', 'click', {'event_category' : 'gwaramedia'});"
                                                                      href="<?php echo home_url() ?>">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.svg"
                                            media="(max-width:768px)">
                                    <img srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-2 col-xl-2 order-md-3">
                        <div class="d-flex justify-content-xl-center">
                            <?php if (!is_user_logged_in()) { ?>
                                <div class="btn--wrapper modal-trigger" data-target="#login-modal">
                                    <button class="button button--icon button--login" type="button" id="login-trigger">
                                        <div class="button--inner">
                                            <div class="icon icon--default">
                                                <svg preserveAspectRatio="none">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#user"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <span class="hidden"><?php esc_html_e('Log In', 'gm'); ?></span>
                                </div>
                            <?php } else { ?>
                                <a class="btn--wrapper" href="<?php echo get_permalink(MY_ACCOUNT) ?>">
                                    <button class="button button--icon button--login" type="button" id="login-trigger">
                                        <div class="button--inner">
                                            <div class="icon icon--default">
                                                <svg preserveAspectRatio="none">
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#user"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <span class="hidden"><?php echo get_the_title(MY_ACCOUNT) ?></span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-2 col-xl-1 order-md-5">
                        <?php
                        if (function_exists('icl_get_languages')) { ?>
                            <div class="language-select dropdown">
                                <ul class="dropdown-list language-select-list">
                                    <?php $languages = icl_get_languages('skip_missing=0&orderby=code&order=desc');
                                    if (!empty($languages)) {
                                        foreach ($languages as $l) {
                                            $class = $l['active'] ? 'dropdown-list--item--active' : NULL;
                                            echo '<li class="dropdown-list--item ' . $class . ' "><a href="' . $l['url'] . '">' . $l['language_code'] . '</a></li>';
                                        }
                                    } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result">
            <div class="search-result--heading">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xxl-6 mx-auto">
                            <form class="search-result-form">
                                <div class="input-inner">
                                    <input id="search-field"
                                           placeholder="<?php esc_html_e('what will we look for', 'gm'); ?>"
                                           value="<?php get_search_query() ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-result--body">
                <div class="container-fluid container-md">
                    <div class="row">
                        <div class="col-12 col-lg-10 mx-auto">
                            <div class="search-result--result">
                                <div class="tabs">
                                    <ul class="tab-bar">
                                        <li>
                                            <button class="button button--green tab-btn tab-btn-active"
                                                    data-cat="<?php echo READ_CAT_ID ?>" type="button"
                                                    data-target="#articles_tab"><?php esc_html_e('Articles', 'gm'); ?>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button--green tab-btn"
                                                    data-cat="<?php echo PODCASTS_CAT_ID ?>" type="button"
                                                    data-target="#podcasts_tab"><?php esc_html_e('Podcasts', 'gm'); ?>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="button button--green tab-btn" data-cat="Authors"
                                                    type="button"
                                                    data-target="#authors_tab"><?php esc_html_e('Authors', 'gm'); ?>
                                            </button>
                                        </li>
                                        <!--                                        <li>-->
                                        <!--                                            <button class="button button--green tab-btn" data-cat="Tests" type="button"-->
                                        <!--                                                    data-target="#quizes_tab">--><?php //esc_html_e('Tests','gm');?>
                                        <!--                                            </button>-->
                                        <!--                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xxl-8 mx-auto">
                            <ul class="tabs-content">
                                <div class="tabs-content--item tabs-content--item--active" id="articles_tab">
                                    <div class="row results">
                                    </div>
                                </div>
                                <div class="tabs-content--item" id="podcasts_tab">
                                    <div class="podcast-list-inner bg--yellow">
                                        <ul class="podcast-list results">

                                        </ul>
                                    </div>
                                </div>
                                <div class="tabs-content--item" id="authors_tab">
                                    <div class="row results">
                                    </div>
                                </div>
                                <!--                                <div class="tabs-content--item" id="quizes_tab">-->
                                <!--                                    <div class="row results">-->
                                <!---->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php
    $class = '';
    if (is_singular('post') && get_post_format() == 'video') {
        $class = 'page-short';
    } ?>
    <main class="main <?php echo $class ?>">
