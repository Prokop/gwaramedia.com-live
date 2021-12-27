<?php get_header() ?>

<div class="page article--page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex align-items-center">
                        <?php if(function_exists('bcn_display_list')) { bcn_display(); }?>
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
                    <div class="text-content-wrapper row">
                        <div class="text-content as-h3">
                            <?php the_content() ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </article>
</div>

<?php get_footer() ?>
