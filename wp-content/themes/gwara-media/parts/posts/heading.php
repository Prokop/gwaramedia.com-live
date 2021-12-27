<div class="article-heading">
    <div class="article-heading-zigzag d-lg-block"> <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/article-zigzag.svg" alt=""></div>
    <div class="article-heading-image"><?php echo wp_get_attachment_image(get_field('banner'), 'large') ?></div>
    <div class="article-heading-text text--center">
        <h1><?php the_title() ?></h1>
        <?php if ($category = get_the_category()) { ?>
            <p>
                <?php echo $category[0]->name; ?>
            </p>
        <?php } ?>
    </div>
</div>