<article class="article">
    <div class="container">
        <?php get_template_part('parts/posts/heading') ?>
        <div class="article-body row pt-5">
            <aside class="article-body--left col-12 col-lg-3 d-flex">
                <div class="article-content w-100 sticky-parent">
                    <?php get_template_part('parts/posts/author-meta') ?>
                    <?php if ($sections = get_field('sections')) { ?>
                        <div class="d-none d-lg-block sticky-el" data-sticky-breakpoint="992px">
                            <nav class="article-nav bg--yellow anchors">
                                <ul>
                                    <?php foreach ($sections as $index => $section) {
                                        ?>
                                        <li>
                                            <a href="#<?php echo 'post-' . $post->ID . '-anchor-' . $index ?>"><?php echo $section['title'] ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    <?php } ?>
                </div>
            </aside>
            <main class="article-body--content col-12 col-lg-5 col-xl-6 sticky-parent">
                <?php if ($sections) { ?>
                    <div class="d-lg-none sticky-el collapse-nav-wrap" data-sticky-breakpoint="0px">
                        <nav class="article-nav collapse-nav bg--yellow anchors" data-collapse-max-breakpoint="992px">
                            <ul>
                                <?php foreach ($sections as $index => $section) { ?>
                                    <li>
                                        <a href="#<?php echo 'post-' . $post->ID . '-anchor-' . $index ?>"><?php echo $section['title'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                <?php } ?>
                <div class="row no-gutters">
                    <div class="col-12">
                        <!-- TODO: this -->
                        <?php if ($sections) { ?>
                            <?php foreach ($sections as $index => $section) { ?>
                                <section id="<?php echo 'post-' . $post->ID . '-anchor-' . $index ?>">
                                    <h2><?php echo $section['title'] ?></h2>
                                    <?php echo $section['content'] ?>
                                </section>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <?php get_template_part('parts/posts/tags') ?>
                    <?php get_template_part('parts/posts/share') ?>
                    <?php get_template_part('parts/posts/subscribe') ?>
                </div>
            </main>
            <?php get_template_part('parts/posts/sidebar') ?>
        </div>
    </div>
</article>

