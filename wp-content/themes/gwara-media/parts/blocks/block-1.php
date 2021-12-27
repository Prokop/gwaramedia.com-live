<?php
if ( !$args['block'] ) return;

$block = $args['block'];
?>

<a class="card bg--yellow card--type-2"
    <?php echo (strpos($block['link'], site_url())) === false ? ' target="_blank"' : ''; ?>
   href="<?php echo $block['link'] ?>">
    <div class="card-text">
        <div class="card-text--body">
            <h3><?php echo $block['title'] ?></h3>
            <p><?php echo $block['text'] ?></p>
        </div>
        <div class="card-text--footer">
            <div class="hashtag"><span><?php echo $block['hashtags'] ?></span></div>
        </div>
    </div>
    <div class="card-image">
        <div class="card-image--inner">
            <?php echo wp_get_attachment_image($block['image'], 'medium_large') ?>
        </div>
    </div>
    <div class="mobile-card-footer py-3">
        <div class="hashtag"><span><?php echo $block['hashtags'] ?></span></div>
    </div>
</a>