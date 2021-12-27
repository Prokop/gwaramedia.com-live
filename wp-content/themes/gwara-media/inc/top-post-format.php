<?php
function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Aside' )
        return 'Explanation';

    if ( $safe_text == 'Chat' )
        return 'Top';

    if ( $safe_text == 'Status' )
        return 'Tilda';

    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );

//rename Aside in posts list table
function live_rename_formats() {
    global $current_screen;

    if ( $current_screen->id == 'edit-post' ) { ?>
        <script type="text/javascript">
            jQuery('document').ready(function() {

                jQuery("span.post-state-format").each(function() {
                    if ( jQuery(this).text() == "Aside" )
                        jQuery(this).text("Explanation");

                    if ( jQuery(this).text() == "Chat" )
                        jQuery(this).text("Top");

                    if ( jQuery(this).text() == "Status" )
                        jQuery(this).text("Tilda");
                });

            });
        </script>
    <?php }
}
add_action('admin_head', 'live_rename_formats');