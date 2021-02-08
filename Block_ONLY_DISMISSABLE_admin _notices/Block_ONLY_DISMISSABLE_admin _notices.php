<?php
/*
Plugin Name: Block ONLY DISMISSABLE admin notices
Version    :  1.0
Description:  Block ONLY DISMISSABLE admin notices
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Block ONLY DISMISSABLE admin notices
*/

/* Start Adding Functions Below this Line */

add_action('admin_enqueue_scripts', 'block_dismissable_admin_notices');
add_action('login_enqueue_scripts', 'block_dismissable_admin_notices');

function block_dismissable_admin_notices() {
   echo '<style>.is-dismissible { display: none !important; }</style>';
}

/* Stop Adding Functions Below this Line */
?>
