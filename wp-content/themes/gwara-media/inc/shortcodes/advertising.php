<?php

add_shortcode( 'ads', 'ads_callback' );
function ads_callback( $atts ){

    global $post;


    $atts = shortcode_atts( array(
        'image' => null,
        'link' => null
    ), $atts );

    if (!$atts['image'] || !$atts['link']) {
        if ($img = get_field('ad_4_banner', 'option')) {


            $content = '<a href="'.get_field('ad_4_link','option').'" '. (strpos(get_field('ad_4_link', 'option'), site_url())) === false ? ' target="_blank"' : '' .'><div class="ad" style="background-image: url('. $img .')"><div class="ad-content"><b>&nbsp;</b></div></div></a>';
        } else {
            $content = '<div class="ad"><div class="ad-content"><b>'. __('Advertising space','gm') .'</b></div></div>';
        }
    } else {
        $content = '<a href="'.$atts['link'].'" '. (strpos($atts['link'], site_url())) === false ? ' target="_blank"' : '' .'><div class="ad" style="background-image: url('. $atts['image'] .')"><div class="ad-content"><b>&nbsp;</b></div></div></a>';
    }

    return $content;
}