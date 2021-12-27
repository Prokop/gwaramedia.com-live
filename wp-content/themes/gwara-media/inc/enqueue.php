<?php
add_action('wp_enqueue_scripts', 'gwara_scripts', 100);
function gwara_scripts()
{

    if (is_singular('post') && get_post_format(get_queried_object_id()) == 'status') return;


    wp_enqueue_style('build', get_stylesheet_directory_uri() . '/css/build.css');
    wp_enqueue_style('lazy', get_stylesheet_directory_uri() . '/css/yt-lazyload.min.css');
    wp_enqueue_style('gm', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/libs/jquery-3.5.1.min.js', array(), null);
    wp_enqueue_script('pauseresume', get_template_directory_uri() . '/js/libs/pauseresume.js', array('jquery'), null, true);
    wp_enqueue_script('dropzone', get_template_directory_uri() . '/js/libs/dropzone.js', array('jquery'), null, true);
    wp_enqueue_script('uploading', get_template_directory_uri() . '/js/uploading.js', array('jquery'), null, true);
    wp_enqueue_script('sweetalert2', '//cdn.jsdelivr.net/npm/sweetalert2@10', array('jquery'), null, true);
    wp_enqueue_script('build', get_template_directory_uri() . '/js/build.js', array('jquery'), null, true);
    wp_localize_script('build', 'tests', array(
        'answers' => get_field('answers'),
        'success_answer' => get_field('test_success_message')
    ));
    wp_enqueue_script('lazy', get_template_directory_uri() . '/js/yt-lazyload.min.js', array('jquery'), null, true);

    wp_enqueue_script('ajax-auth-script', get_template_directory_uri() . '/js/ajax-auth-script.js', array('jquery'), null, true);
    wp_localize_script('ajax-auth-script', 'ajax_auth_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'loadingmessage' => __('Sending user info, please wait...', 'gm')
    ));

    wp_enqueue_script('my-account', get_template_directory_uri() . '/js/my-account.js', array('jquery'), null, true);
    wp_localize_script('my-account', 'my_account_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'loadingmessage' => __('Sending user info, please wait...', 'gm')
    ));
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
    wp_localize_script('main', 'main', array(
        'gtd' => get_template_directory_uri(),
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));

    wp_dequeue_style('tilda-grid-3.0.min.css');
    wp_dequeue_style('tilda-blocks-2.12.css');
    wp_dequeue_style('tilda-animation-1.0.min.css');
    wp_dequeue_style('tilda-slds-1.4.min.css');
    wp_dequeue_style('tilda-zoom-2.0.min.css');

    wp_dequeue_script('tilda-scripts-2.8.min.js');
    wp_dequeue_script('tilda-blocks-2.7.js');
    wp_dequeue_script('tilda-animation-1.0.min.js');
    wp_dequeue_script('tilda-slds-1.4.min.js');
    wp_dequeue_script('tilda-zoom-2.0.min.js');
    wp_dequeue_script('tilda-animation-sbs-1.0.min.js');
    wp_dequeue_script('jquery-1.10.2.min.js');
    wp_dequeue_script('lazyload-1.3.min.js');
    wp_dequeue_script('hammer.min.js');
    wp_dequeue_script('rentafont_webfonts.js');


}
