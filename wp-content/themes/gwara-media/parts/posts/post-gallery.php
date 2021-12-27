<article class="article article-gallery">
    <div class="container">
        <div class="article-heading">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1><?php the_title() ?></h1>
                    <?php if ($category = get_the_category()) { ?>
                        <p>
                            <?php echo $category[0]->name; ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-6 d-md-flex justify-content-md-end">
                    <div class="author">
                        <div class="author-info">
                            <h4><?php the_author() ?></h4>
                            <p><?php echo get_the_date() ?></p>
                        </div>
                        <div class="author-avatar"><?php echo get_avatar(get_the_author_meta('ID')) ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-body row pt-5">
            <main class="article-body--content col-12">
                <?php the_content() ?>
                <div class="article-footer">
                    <?php get_template_part('parts/posts/tags') ?>
                    <?php get_template_part('parts/posts/share') ?>
                    <?php get_template_part('parts/posts/subscribe') ?>
                </div>
            </main>
        </div>
    </div>
</article>