<?php

function ajax_login()
{

    // First check the nonce, if it fails the function will break
    check_ajax_referer('ajax-login-nonce', 'security');
    // Nonce is checked, get the POST data and sign user on
    // Call auth_user_login
    auth_user_login($_POST['username'], $_POST['password'], $_POST['rememberme'], 'Login');
    die();
}

function auth_user_login($user_login, $password, $login, $rememberme)
{
    $info = array();
    $info['user_login'] = $user_login;
    $info['user_password'] = $password;
    $info['remember'] = $rememberme;
    if ($info['remember']) $info['remember'] = "true";
    else $info['remember'] = "false";
    //From false to '' since v4.9
    $user_signon = wp_signon($info, '');

    if (is_wp_error($user_signon)) {
        echo json_encode(array('loggedin' => false, 'message' => __('Wrong username or password.', 'gm')));
    } else {
        wp_set_current_user($user_signon->ID);
        echo json_encode(array('loggedin' => true, 'message' => sprintf(__('Hi, %s!', 'gm'), $user_signon->first_name)));
    }

    die();
}

function ajax_forgotPassword()
{

    // First check the nonce, if it fails the function will break
    check_ajax_referer('ajax-forgot-nonce', 'security');

    global $wpdb;

    $account = $_POST['user_login'];

    if (empty($account)) {
        $error = __('Enter an username or e-mail address.', 'gm');
    } else {
        if (is_email($account)) {
            if (email_exists($account))
                $get_by = 'email';
            else
                $error = __('There is no user registered with that email address.', 'gm');
        } else if (validate_username($account)) {
            if (username_exists($account))
                $get_by = 'login';
            else
                $error = __('There is no user registered with that username.', 'gm');
        } else
            $error = __('Invalid username or e-mail address.', 'gm');
    }

    if (empty ($error)) {
        // lets generate our new password
        //$random_password = wp_generate_password( 12, false );
        $random_password = wp_generate_password();


        // Get user data by field and data, fields are id, slug, email and login
        $user = get_user_by($get_by, $account);

        $update_user = wp_update_user(array('ID' => $user->ID, 'user_pass' => $random_password));

        // if  update user return true then lets send user an email containing the new password
        if ($update_user) {

            $from = ''; // Set whatever you want like mail@yourdomain.com

            if (!(isset($from) && is_email($from))) {
                $sitename = strtolower($_SERVER['SERVER_NAME']);
                if (substr($sitename, 0, 4) == 'www.') {
                    $sitename = substr($sitename, 4);
                }
                $from = 'admin@' . $sitename;
            }

            $to = $user->user_email;
            $subject = 'Your new password';
            $sender = 'From: ' . get_option('name') . ' <' . $from . '>' . "\r\n";

            $message = 'Your new password is: ' . $random_password;

            $headers[] = 'MIME-Version: 1.0' . "\r\n";
            $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers[] = "X-Mailer: PHP \r\n";
            $headers[] = $sender;

            $mail = wp_mail($to, $subject, $message, $headers);
            if ($mail)
                $success = 'Check your email address for you new password.';

            else
                $error = 'System is unable to send you mail containg your new password.';
        } else {
            $error = 'Oops! Something went wrong while updaing your account.';
        }
    }

    if (!empty($error))
        //echo '<div class="error_login"><strong>ERROR:</strong> '. $error .'</div>';
        echo json_encode(array('loggedin' => false, 'message' => __($error)));

    if (!empty($success))
        //echo '<div class="updated"> '. $success .'</div>';
        echo json_encode(array('loggedin' => false, 'message' => __($success)));

    die();
}

add_action('wp_ajax_nopriv_ajaxlogin', 'ajax_login');
add_action('wp_ajax_nopriv_ajaxforgotpassword', 'ajax_forgotPassword');


/**
 * New User registration
 *
 */
function vb_reg_new_user()
{

    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'vb_new_user'))
        die('Ooops, something went wrong, please try again later.');

    // Post values
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['mail'];
    $name = $_POST['user'];
//    $nick     = $_POST['nick'];

    /**
     * IMPORTANT: You should make server side validation here!
     *
     */

    $userdata = array(
        'user_login' => $username,
        'user_pass' => $password,
        'user_email' => $email,
        'first_name' => $username,
//        'nickname'   => $nick,
    );

    $user_id = wp_insert_user($userdata);

    // Return
    if (!is_wp_error($user_id)) {

        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
        echo '1';
    } else {
        echo $user_id->get_error_message();
    }
    die();

}

add_action('wp_ajax_register_user', 'vb_reg_new_user');
add_action('wp_ajax_nopriv_register_user', 'vb_reg_new_user');