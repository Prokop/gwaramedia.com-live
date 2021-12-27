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

<?php
$obj = get_queried_object();
$parents = get_ancestors($obj->term_taxonomy_id, 'category');
if ($obj->parent) {

    $default = true;
    if (in_array(SPECIAL_PROJECTS_CAT_ID, $parents)) {
        get_template_part('parts/categories/special-projects');
        $default = false;
    }
    if (in_array(PODCASTS_CAT_ID, $parents)) {
        get_template_part('parts/categories/podcasts');
        $default = false;
    }

    if ($default) get_template_part('parts/categories/default');


} else {
    switch ($obj->term_taxonomy_id) {
        case SPECIAL_PROJECTS_CAT_ID:
            get_template_part('parts/categories/special-projects');
            break;
        case PODCASTS_CAT_ID:
            get_template_part('parts/categories/podcasts');
            break;

        default:
            get_template_part('parts/categories/default');
            break;
    }
}

?>

<?php get_footer() ?>