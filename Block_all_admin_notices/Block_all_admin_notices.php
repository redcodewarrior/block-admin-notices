<?php
/*
Plugin Name: Block ALL admin notices
Version    :  1.0
Description:  Block ONLY DISMISSABLE admin notices
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Block ALL admin notices
*/

/* Start Block ALL admin notices */

add_action('admin_enqueue_scripts', 'block_dismissable_admin_notices');
add_action('login_enqueue_scripts', 'block_dismissable_admin_notices');

function block_dismissable_admin_notices() {
   echo '<style>.wp-core-ui .notice{ display: none !important; }</style>';
}

/* Stop Block ALL admin notices */
?>
