<?php // Template name: Stories ?>
<?php get_header() ?>
<div class="container">
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


<section class="stories-container articles-on-category-section">
    <div class="container">
        <ul class="row articles-on-category mt-0">
            <?php
            $args = array(
                'post_type' => 'web-story',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : $i = 0;
                $classes = 'articles-on-category col-12 col-sm-6 col-lg-4 col-xl-3 mb-3';
                ?>
                <?php while ($query->have_posts()) : $query->the_post();?>
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
                                <?php if ($txt = get_the_excerpt()) { ?>
                                    <div class="mobile-card-footer py-3">
                                        <?php echo $txt ?>
                                    </div>
                                <?php } ?>
                            </a>
                        </li>
                        <?php

                    $i++;
                endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>


        </ul>
    </div>
</section>

<?php get_footer() ?>
