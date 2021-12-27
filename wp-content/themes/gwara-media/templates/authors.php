<?php // Template name: Authors ?>
<?php get_header() ?>

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
<div class="container">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="content">
                <h1><?php the_title() ?></h1>
                <ul class="authors-list row mt-4 pt-2 mt-lg-5 pt-lg-4">
                    <?php
                    $per_page = 6;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $users = get_users_ordered_by_post_date([
                        'number' => '6',
                        'paged' => $paged,
                        'has_published_posts' => true,
                        'exclude' => array(1, 2, 4)
                    ]);
                    if ($users) {
                        foreach ($users as $user) {
                            $userdata = get_user_meta($user->ID); ?>
                            <li class="col-12 col-md-6 col-lg-4 mb-5 pb-xl-5">
                                <a class="author-card" href="<?php echo get_author_posts_url($user->ID) ?>">
                                    <div class="author-card--avatar"><?php echo get_avatar($user->ID, 500) ?></div>
                                    <div class="author-card--info">
                                        <div class="as-h3">
                                            <h2><?php _e($user->display_name, 'Authors') ?></h2>
                                        </div>
                                        <?php if (isset($userdata['description'][0])) { ?>
                                            <div class="small-title-500">
                                                <p><?php echo $userdata['description'][0]; ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </a></li>
                        <?php }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row pt-5 pb-3 mt-4">
        <div class="col-12 d-flex justify-content-center">
            <?php
            if ($users) {
                $big = 999999999; // need an unlikely integer

                $users = get_users([
                    'number' => -1,
                    'has_published_posts' => true,
                ]);

                echo '<div class="authors-pagination">'.paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, $paged ),
                    'total' =>  count($users) / $per_page
                ) ) . '</div>';
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
