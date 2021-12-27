<li class="podcast-list--item">
    <a class="podcast-card relative" href="<?php the_permalink() ?>">
        <div class="icon icon--default icon--podcast-card--sound">
            <svg preserveAspectRatio="none">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.symbol.svg#sound"></use>
            </svg>
        </div>
        <div class="image-inner">
            <?php the_post_thumbnail() ?>
        </div>
        <div class="podcast-card--text">
            <h4><?php echo wph_cut_by_words(30, get_the_title()) ?></h4>
        </div>
        <div class="icon icon--podcast-card--play"><img
                src="<?php echo get_template_directory_uri(); ?>/img/svg/play.svg">
        </div>
    </a>
</li>