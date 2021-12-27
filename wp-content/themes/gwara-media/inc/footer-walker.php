<?php

class footer_walker extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        $classes = array('footer-menu');

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args An object of `wp_nav_menu()` arguments.
         * @param int $depth Depth of menu item. Used for padding.
         */
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    // add main/sub classes to li's and links
    function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0)
    {

        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // depth dependent classes

        // passed classes

        $classes = [];
        $classes[] = $depth > 0 ? 'footer-menu--item' : 'col-6 col-md-3 pr-4 mb-5 pb-4 mb-md-0 pb-md-0';


        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args)));

        // link attributes
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        // build html
        $output .= $indent . '<li class="' . $class_names . '">';

        if ($depth > 0) {
            $item_output = sprintf('%1$s<a%2$s>%3$s%5$s%6$s</a>%7$s',
                $args->before,
                $attributes,
                $args->link_before,
                trim(strip_tags(apply_filters('the_title', $item->title, $item->ID))),
                apply_filters('the_title', $item->title, $item->ID),
                $args->link_after,
                $args->after
            );
        } else {
            $item_output = sprintf('<div class="footer-menu--group"><h4>%1$s</h4>',
                apply_filters('the_title', $item->title, $item->ID)
            );
        }


        // build html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }

        if ($depth > 0) {
            $output .= "</li>{$n}";
        } else {
            $output .= "</div></li>{$n}";
        }


    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</ul>{$n}";
    }
}
