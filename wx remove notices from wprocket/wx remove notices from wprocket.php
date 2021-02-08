<?php
/*
Plugin Name:  WX remove notices from wprocket
Version    :  1.0
Description:  Remove admin notices from wprocket notices using hook so they do not show anymore.
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wx remove notices from wprocket
*/

/* Start WX remove notices from wprocket */

add_action( 'init', 'remove_my_action' );
function remove_my_action()
{
global $wp_filter;
remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions');
remove_action( 'admin_notices', 'rocket_warning_config_dir_permissions');
}

/* End WX remove notices from wprocket */

?>