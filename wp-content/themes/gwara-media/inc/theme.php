<?php
add_action('after_setup_theme', function () {
    flush_rewrite_rules();
    load_theme_textdomain('gm');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    add_theme_support('woocommerce');

    add_image_size('ts_woocommerce_gallery_thumbnail', 200, 200, false);

    add_theme_support('post-formats', array('aside', 'gallery', 'chat', 'audio', 'status', 'video'));

    register_nav_menus(array(
        'primary_menu' => __('Main menu', 'gm'),
        'footer_menu' => __('Footer menu', 'gm'),
    ));
    /**
     *    add option custom fields
     */
    if (function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')) {

        acf_add_options_page(array(
            'page_title' => esc_html__('Theme settings', 'gm'),
            'menu_title' => esc_html__('Theme settings', 'gm'),
            'menu_slug' => 'theme-general',
            'capability' => 'edit_posts',
            '	icon_url' => get_template_directory_uri() . '/inc/img/cogs-solid.png'
        ));

//        acf_add_options_sub_page(array(
//            'page_title' => esc_html__('Branding', 'gm'),
//            'menu_title' => esc_html__('Branding', 'gm'),
//            'menu_slug' => 'theme-general-branding',
//            'parent_slug' => 'theme-general'
//        ));

        acf_add_options_sub_page(array(
            'page_title' => esc_html__('White blocks', 'gm'),
            'menu_title' => esc_html__('White blocks', 'gm'),
            'menu_slug' => 'theme-general-blocks',
            'parent_slug' => 'theme-general'
        ));


        acf_add_options_sub_page(array(
            'page_title' => esc_html__('Social', 'gm'),
            'menu_title' => esc_html__('Social', 'gm'),
            'menu_slug' => 'theme-general-socail',
            'parent_slug' => 'theme-general'
        ));


        acf_add_options_sub_page(array(
            'page_title' => esc_html__('Ads', 'gm'),
            'menu_title' => esc_html__('Ads', 'gm'),
            'menu_slug' => 'theme-general-ads',
            'parent_slug' => 'theme-general'
        ));


        acf_add_options_sub_page(array(
            'page_title' => esc_html__('Footer', 'gm'),
            'menu_title' => esc_html__('Footer', 'gm'),
            'menu_slug' => 'theme-general-subscribe',
            'parent_slug' => 'theme-general'
        ));

    }

});


add_filter('excerpt_length', function () {
    return 5;
});

add_filter('excerpt_more', function ($more) {
    return '...';
});


add_filter('imgtosvg', 'convert_image_path_to_svg');
function convert_image_path_to_svg($image_url)
{
    return $image_url ? file_get_contents($image_url) : "Image url is missed";
}


add_action('pre_get_posts', 'hwl_home_pagesize', 1);
function hwl_home_pagesize($query)
{
    // Выходим, если это админ-панель или не основной запрос.
    if (is_admin() || !$query->is_main_query())
        return;

    if ($query->is_author()) {
        $query->set('posts_per_page', 6);
    }
    if ($query->is_category()) {
        $obj = get_queried_object();
        if ($obj->parent) {
            switch ($obj->parent) {
                case SPECIAL_PROJECTS_CAT_ID:
                    $query->set('posts_per_page', 6);
                    break;
                case PODCASTS_CAT_ID:
                    $query->set('posts_per_page', 1);
                    break;
                default:

                    // to exclude first 4 posts from cat
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'cat' => $obj->cat_ID
                    );
                    $query_flag = new WP_Query($args);
                    $exclude_posts = array();
                    if ($query_flag->have_posts()) :
                        foreach ($query_flag->posts as $item) {
                            $exclude_posts[] = $item->ID;
                        }
                    endif;
                    $query->set('posts_per_page', 13);
                    $query->set('post__not_in', $exclude_posts);
                    break;
            }
        } else {
            switch ($obj->term_taxonomy_id) {
                case SPECIAL_PROJECTS_CAT_ID:
                    $query->set('posts_per_page', 6);
                    break;
                case PODCASTS_CAT_ID:
                    $query->set('posts_per_page', 1);
                    break;
                default:

                    // to exclude first 4 posts from cat
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'cat' => $obj->cat_ID
                    );
                    $query_flag = new WP_Query($args);
                    $exclude_posts = array();
                    if ($query_flag->have_posts()) :
                        foreach ($query_flag->posts as $item) {
                            $exclude_posts[] = $item->ID;
                        }
                    endif;
                    $query->set('posts_per_page', 13);
                    $query->set('post__not_in', $exclude_posts);

                    break;
            }
        }

    }
}


add_filter('img_caption_shortcode', 'my_img_caption_shortcode', 10, 3);
function my_img_caption_shortcode($empty, $attr, $content)
{
    $attr = shortcode_atts(array(
        'id' => '',
        'align' => 'alignnone',
        'width' => '',
        'caption' => ''
    ), $attr);

    if (1 > (int)$attr['width'] || empty($attr['caption'])) {
        return '';
    }

    if ($attr['id']) {
        $attr['id'] = 'id="' . esc_attr($attr['id']) . '" ';
    }

    return '<figure>'
        . do_shortcode($content)
        . '<figcaption>' . $attr['caption'] . '</figcaption>'
        . '</figure>';

}


/**
 * Related posts
 *
 * @global object $post
 * @param array $args
 * @return
 */
function gm_related_posts($args = array())
{
    global $post;

    // default args
    $args = wp_parse_args($args, array(
        'post_id' => !empty($post) ? $post->ID : '',
        'taxonomy' => 'category',
        'limit' => 3,
        'post_type' => !empty($post) ? $post->post_type : 'post',
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    // check taxonomy
    if (!taxonomy_exists($args['taxonomy'])) {
        return;
    }

    // post taxonomies
    $taxonomies = wp_get_post_terms($args['post_id'], $args['taxonomy'], array('fields' => 'ids'));

    if (empty($taxonomies)) {
        return;
    }

    // query
    $related_posts = get_posts(array(
        'post__not_in' => (array)$args['post_id'],
        'post_type' => $args['post_type'],
        'tax_query' => array(
            array(
                'taxonomy' => $args['taxonomy'],
                'field' => 'term_id',
                'terms' => $taxonomies
            ),
        ),
        'posts_per_page' => $args['limit'],
        'orderby' => $args['orderby'],
        'order' => $args['order']
    ));

    include(locate_template('parts/posts/related-posts-template.php', false, false));

    wp_reset_postdata();
}

add_action('init', 'my_custom_init');
function my_custom_init()
{
    register_post_type('test', array(
        'labels' => array(
            'name' => __('Test', 'gm'),
            'singular_name' => __('Tests', 'gm'),
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail')
    ));
}


add_action('wp_ajax_gwara_search', 'search_callback');
add_action('wp_ajax_nopriv_gwara_search', 'search_callback');
function search_callback()
{


    if ($_POST['cat'] == 'Tests') {


        wp_die();
    }

    if ($_POST['cat'] == 'Authors') {
        $users = get_users([
            'number' => 999999,
            'has_published_posts' => true,
            'search' => '*' . $_POST['s'] . '*',
            'exclude' => array(1, 2, 4)
        ]);
        if ($users) {
            foreach ($users as $user) {
                $userdata = get_user_meta($user->ID); ?>
                <div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-3">
                    <div class="card card--author bg--disabled"><a
                                href="<?php echo get_author_posts_url($user->ID) ?>">
                            <div class="card-image">
                                <div class="card-image--inner">
                                    <?php echo get_avatar($user->ID, 300) ?>
                                </div>
                            </div>
                            <div class="card-text text--center text-md--left">
                                <h3><?php echo $user->display_name ?></h3>
                                <?php if (isset($userdata['description'][0])) { ?>
                                    <span><?php echo $userdata['description'][0]; ?></span>
                                <?php } ?>
                                <p><b><?php esc_html_e('Latest new', 'gm'); ?>:</b></p>
                                <p>
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 1,
                                        'author' => $user->ID
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) :
                                        while ($query->have_posts()) : $query->the_post();
                                            the_title();
                                        endwhile;
                                    endif;
                                    wp_reset_postdata(); ?>
                                </p>
                            </div>
                        </a></div>
                </div>
            <?php }
        } else {
            esc_html_e('Nothing found', 'gm');
        }

        wp_die();
    }

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        's' => $_POST['s'],
        'cat' => $_POST['cat']
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            if ($_POST['cat'] == PODCASTS_CAT_ID) {
                get_template_part('parts/posts/post-audio-mini');
            } else { ?>
                <div class="col-12 col-md-6 mb-3"><a class="card bg--disabled card--type-3"
                                                     href="<?php the_permalink() ?>">
                        <div class="zigzag">
                            <?php if ($zizag = get_field('zigzag')) { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/card/<?php echo $zizag ?>.svg">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/zigzag/card/type-1--color-yellow.svg">
                            <?php } ?>
                        </div>
                        <div class="card-text">
                            <div class="card-text--body">
                                <h3><?php echo wph_cut_by_words(30, get_the_title()) ?></h3>
                                <?php the_excerpt() ?>
                            </div>
                            <div class="card-text--footer">
                                <?php if ($tags = wp_get_post_tags($post->ID)) {
                                    foreach ($tags as $tag) { ?>
                                        <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="card-image">
                            <div class="card-image--inner">
                                <?php the_post_thumbnail($post->ID) ?>
                            </div>
                        </div>
                        <div class="mobile-card-footer py-3">
                            <?php if ($tags) {
                                foreach ($tags as $tag) { ?>
                                    <div class="hashtag"><span>#<?php echo $tag->name ?></span>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </a>
                </div>
            <?php }

        endwhile;
    else:
        esc_html_e('Nothing found', 'gm');
    endif;
    wp_reset_postdata();


    wp_die();
}


add_filter('tiny_mce_before_init', 'modify_formats');

function modify_formats($settings)
{
    $formats = array(
        'bold' => array('inline' => 'b'),
        'italic' => array('inline' => 'i')
    );
    $settings['formats'] = json_encode($formats);
    return $settings;
}


function kama_title($args = '')
{
    global $post;

    if (is_string($args))
        parse_str($args, $args);

    $rg = (object)array_merge(array(
        'maxchar' => 350,   // Макс. количество символов.
        'text' => '',    // Какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
        // Если в тексте есть `<!--more-->`, то `maxchar` игнорируется и берется
        // все до <!--more--> вместе с HTML.
        'autop' => true,  // Заменить переносы строк на <p> и <br> или нет?
        'save_tags' => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'.
        'more_text' => '...', // Текст ссылки `Читать дальше`.
        'ignore_more' => false, // нужно ли игнорировать <!--more--> в контенте
    ), $args);

    $rg = apply_filters('kama_excerpt_args', $rg);

    if (!$rg->text)
        $rg->text = $post->post_title;


    var_dump($rg->text);

    $text = $rg->text;
    // убираем блочные шорткоды: [foo]some data[/foo]. Учитывает markdown
    $text = preg_replace('~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text);
    // убираем шоткоды: [singlepic id=3]. Учитывает markdown
    $text = preg_replace('~\[/?[^\]]*\](?!\()~', '', $text);
    $text = trim($text);


    $text = trim(strip_tags($text, $rg->save_tags));

    // Обрезаем
    if (mb_strlen($text) > $rg->maxchar) {
        $text = mb_substr($text, 0, $rg->maxchar);
        $text = preg_replace('~(.*)\s[^\s]*$~s', '\\1...', $text); // кил последнее слово, оно 99% неполное
    }


    // сохраняем переносы строк. Упрощенный аналог wpautop()
    if ($rg->autop) {
        $text = preg_replace(
            array("/\r/", "/\n{2,}/", "/\n/", '~</p><br ?/?>~'),
            array('', '</p><p>', '<br />', '</p>'),
            $text
        );
    }

    $text = apply_filters('kama_excerpt', $text, $rg);

    if (isset($text_append))
        $text .= $text_append;

    return ($rg->autop && $text) ? $text : $text;
}



function wph_cut_by_words($maxlen, $text) {
    $len = (mb_strlen($text) > $maxlen)? mb_strripos(mb_substr($text, 0, $maxlen), ' ') : $maxlen;
    $cutStr = mb_substr($text, 0, $len);
    $temp = (mb_strlen($text) > $maxlen)? $cutStr. '...' : $cutStr;
    return $temp;
}


function get_users_ordered_by_post_date($args = '') {
    // Prepare arguments
    if (is_string($args) && '' !== $args)
        parse_str($args, $args);
    $asc = (isset($args['order']) && 'ASC' === strtoupper($args['order']));
    unset($args['orderby']);
    unset($args['order']);

    // Get ALL users
    $users = get_users($args);
    $post_dates = array();
    if ($users) {
        // For EACH user ...
        foreach ($users as $user) {
            $ID = $user->ID;

            // ... get ALL posts (per default sorted by post_date), ...
            $posts = get_posts('author='.$ID);
            $post_dates[$ID] = '';

            // ... then use only the first (= newest) post
            if ($posts) $post_dates[$ID] = $posts[0]->post_date;
        }
    }

    // Sort dates (according to order), ...
    if (! $asc)
        arsort($post_dates);

    // ... then set up user array
    $users = array();
    foreach ($post_dates as $key => $value) {
        // $user = get_userdata($key);
        // $users[] = $user->ID;
        $users[] = get_userdata($key);
    }
    return $users;
}