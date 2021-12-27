<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?php echo get_category(SPECIAL_PROJECTS_CAT_ID)->name ?></h1>
        </div>
    </div>
    <div class="row mt-3 mt-md-5">
        <div class="col-12">
            <ul class="tabs-content">
                <li class="tab-content-item">
                    <div class="specical-projects-wrap">
                        <ul class="special-projects-list row">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <li class="col-12 col-sm-6 col-lg-4 mb-3 pb-2">
                                    <div class="special-project bg-md--disabled">

                                        <div class="special-project--image">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_post_thumbnail() ?>
                                            </a>
                                        </div>
                                        <div class="special-project--text">
                                            <div class="upper">
                                                <h3><?php echo wph_cut_by_words(50, get_the_title()) ?></h3>
                                            </div>
                                            <?php if ($tags = wp_get_post_tags($post->ID)) { ?>
                                                <div class="mobile-card-footer py-3">
                                                    <?php foreach ($tags as $tag) { ?>
                                                        <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                            <div class="mobile-text d-md-none">
                                                <?php the_excerpt() ?>
                                            </div>
                                            <div class="desktop-text d-none d-md-block">
                                                <?php the_excerpt() ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                        <div class="mt-5 d-flex justify-content-center w-100">
                            <?php the_posts_pagination() ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>