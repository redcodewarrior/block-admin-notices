<?php
/*
Plugin Name:  Block admin notices
Version    :  1.0
Description:  Blocking admin notices so they do not show anymore.
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Block admin notices
*/

/* Start Block admin notices Function */
  
add_action('admin_enqueue_scripts', 'block_admin_notices');
add_action('login_enqueue_scripts', 'block_admin_notices');

function block_admin_notices() {

    global $wp_filter;

    if (is_user_admin()) {
        if (isset($wp_filter['user_admin_notices'])) {
            unset($wp_filter['user_admin_notices']);
        }
    } elseif (isset($wp_filter['admin_notices'])) {
        unset($wp_filter['admin_notices']);
    }
}
  
/* End of Block admin notices Function */


