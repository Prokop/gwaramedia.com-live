<?php if (!empty($related_posts)) { ?>
    <h3><?php esc_html_e('In the subject','gm');?>:</h3>
    <ul class="more-articles">
        <?php
        foreach ($related_posts as $post) {
            setup_postdata($post);
            ?>
            <li class="more-articles--item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php } ?>
    </ul>
    <?php
}