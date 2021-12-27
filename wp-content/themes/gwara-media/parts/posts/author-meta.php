<div class="author">
    <div class="author-avatar"><?php echo get_avatar(get_the_author_meta('ID')) ?></div>
    <div class="author-info">
        <h4><?php the_author() ?></h4>
        <p><?php echo get_the_date() ?></p>
    </div>
</div>