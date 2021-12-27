<?php if (get_post_format() != 'status') {
    get_header(); ?>


    <div class="page article--page">
        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-flex align-items-center">
                            <?php if (function_exists('bcn_display_list')) {
                                bcn_display();
                            } ?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <?php get_template_part('parts/posts/post', get_post_format()); ?>
        <?php
        if (get_post_format() != 'video') {
            the_post_navigation(array('in_same_term' => true));
        }
        ?>
    </div>

    <?php
    get_footer();
} else {

    ?>

    <!DOCTYPE html>
    <html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            @font-face {
                font-family: "IBM_Plex_Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.woff2") format("woff2");
                font-weight: 300;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "IBM Plex Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/300/300.woff2") format("woff2");
                font-weight: 300;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "IBM_Plex_Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.woff2") format("woff2");
                font-weight: 400;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "IBM Plex Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/400/400.woff2") format("woff2");
                font-weight: 400;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "IBM_Plex_Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/500/500.woff2") format("woff2");
                font-weight: 500;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "IBM_Plex_Sans";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/IBM_Plex_Sans/700/700.woff2") format("woff2");
                font-weight: 700;
                font-style: normal;
                font-display: swap
            }

            @font-face {
                font-family: "formular";
                src: url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.eot");
                src: url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.eot?#iefix") format("embedded-opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.otf") format("opentype"), url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.svg") format("svg"), url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.ttf") format("truetype"), url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.woff") format("woff"), url("<?php echo get_template_directory_uri() ?>/fonts/formular/900/900.woff2") format("woff2");
                font-weight: 900;
                font-style: normal;
                font-display: swap
            }
            h1, h2, h3 {display: block}
        </style>
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
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MX2PD7D"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>

    </body>
    </html>
<?php }
?>

