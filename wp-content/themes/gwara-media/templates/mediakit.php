<?php // Template name: Mediakit ?>
<?php get_header() ?>
<div class="page article--page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex align-items-center">
                        <?php if (function_exists('bcn_display_list')) {
                            bcn_display();
                        } ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <article class="article">
        <div class="container">
            <div class="article-body">
                <main>
                    <div class="text-md--center mb-md-5 pb-3 px-md-0 row">
                        <div class="col-12 col-lg-10 col-xxl-8 mx-auto">
                            <h1><?php the_title() ?></h1>
                        </div>
                    </div>
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="img-fluid d-none d-md-block">
                            <?php the_post_thumbnail('full') ?>
                        </div>
                    <?php } ?>
                    <?php if ($content = get_field('content')) {
                        foreach ($content as $text) { ?>
                            <div class="text-content-wrapper mediakit-text row mt-md-5 pt-lg-5">
                                <div class="text-content as-h3">
                                    <?php echo $text['text'] ?>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </main>
            </div>
        </div>
    </article>
</div>
<?php get_footer() ?>
