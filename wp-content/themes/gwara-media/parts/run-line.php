<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
);
$query = new WP_Query($args);
if ($query->have_posts()) : ?>
    <div class="index-ticker">
        <div class="ticker-wrapper bg--yellow index-news-ticker">
            <ul class="ticker-inner d-flex flex-nowrap">
                <?php while ($query->have_posts()) : $query->the_post();
                    if (strip_tags(get_the_excerpt())) { ?>
                        <li class="ticker-el ticker-news-el"><a
                                href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php }
                endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>