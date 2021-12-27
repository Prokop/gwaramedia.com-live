<?php if ($tags = wp_get_post_tags($post->ID)) { ?>
    <div class="tags d-flex flex-wrap mt-5">
        <h4><?php esc_html_e('Tags', 'gm'); ?>:</h4>
            <?php foreach ($tags as $tag) { ?>
        <span>
                #<?php echo $tag->name ?>
        </span>
            <?php } ?>
    </div>
<?php } ?>