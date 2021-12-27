<?php

add_action( 'wp_ajax_update_user_data', 'update_user_data' );
function update_user_data()
{
    check_ajax_referer( 'ajax-update-user-nonce', 'security' );

    parse_str($_POST['form'], $data);

    $args = [
        'ID'       => get_current_user_id(),
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'user_email' => $data['email']
    ];

    if ($data['password']) {
        $args['user_pass'] = $data['password'];
    }

    $user_id = wp_update_user( $args );

    update_field( 'phone', $data['phone'], 'user_' . get_current_user_id() );
    update_field( 'nova_poshta', $data['nova_poshta'], 'user_' . get_current_user_id() );

    if ( is_wp_error( $user_id ) ) {
        wp_send_json(array('status' => 0, 'msg' => __('Oooops! Something went wrong! Try later.', 'gm')));
    }
    else {
        wp_send_json(array('status' => 200, 'msg' => __('User data successful updated', 'gm')));
    }

    die();
}