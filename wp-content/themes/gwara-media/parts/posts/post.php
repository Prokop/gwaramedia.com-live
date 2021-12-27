<article class="article">
    <div class="container">
        <?php get_template_part('parts/posts/heading') ?>
        <div class="article-body row pt-3 pt-lg-5 mt-1 mt-lg-0">
            <aside class="article-body--left col-12 col-lg-3 sticky-parent">
                <div class="article-content sticky-el" data-sticky-breakpoint="992px">
                    <?php get_template_part('parts/posts/author-meta') ?>
                </div>
            </aside>
            <main class="article-body--content col-12 col-lg-5 col-xl-6">
                <div class="row no-gutters">
                    <div class="col-12">
                        <section>
                            <?php the_content() ?>
                            <?php get_template_part('parts/posts/tags') ?>
                            <?php get_template_part('parts/posts/share') ?>
                            <?php get_template_part('parts/posts/subscribe') ?>
                        </section>
                    </div>
                </div>
            </main>
            <?php get_template_part('parts/posts/sidebar') ?>
        </div>
    </div>
</article>