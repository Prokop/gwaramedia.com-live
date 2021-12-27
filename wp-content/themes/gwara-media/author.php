<?php get_header() ?>

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
<div class="container">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="content">
                <h1><?php
                    $author = get_queried_object();
                    $title = $author->display_name;
                    esc_html_e("AUTHOR'S PUBLICATIONS", 'gm');
                    echo ' ';
                    echo $title ?></h1>
                <ul class="row author-posts posts-list pt-2 mt-lg-5 pt-lg-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="col-12 col-md-6 col-xl-4 mb-3"><a class="card bg--disabled card--type-3"
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
                                        <p><?php the_excerpt() ?></p>
                                    </div>
                                    <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                        <div class="card-text--footer">
                                            <?php foreach ($tags as $tag) { ?>
                                                <div class="hashtag"><span>#<?php echo $tag->name ?></span></div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="card-image">
                                        <div class="card-image--inner">
                                            <?php the_post_thumbnail() ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($tags) { ?>
                                    <div class="mobile-card-footer py-3">
                                        <?php foreach ($tags as $tag) { ?>
                                            <div class="hashtag"><span>#<?php echo $tag->name ?></span></div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row pt-5 pb-3 mt-4">
        <div class="col-12 d-flex justify-content-center">
            <?php the_posts_pagination() ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
