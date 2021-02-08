<?php
/*
Plugin Name:  Remove action
Version    :  1.0
Description:  Remove admin notices using hook so they do not show anymore.
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Remove action
*/


add_action( 'init', 'remove_my_action' );
function remove_my_action()
{
global $wp_filter;
remove_action( 'admin_notices', 'display_admin_notice');
}

?>