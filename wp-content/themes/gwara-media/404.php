<?php get_header() ?>
<div class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start">
                <div class="as-h3"><a href="<?php echo site_url() ?>">
                        <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrows/arrow-green.svg"></div><span><?php esc_html_e('Go Home','gm');?></span></a></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="wrapper-404 d-flex justify-content-center align-items-center">
                    <div class="zigzag"><img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/zigzag-404.svg"></div>
                    <h1>404</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
