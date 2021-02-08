<?php
/*
Plugin Name: admin notices on
Description: it turns off admin notices
Version    :  1.0
Description:  Show all 4 admin notices to test
Author     :  Carlos Alberto Romay
Author URI :  hhttps://freelancerwriter.com/
License    :  GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  admin notices on
*/


/* Start admin notices on */
  
function display_admin_notice() {
    ?>
    <div class ="notice notice-success is-dismissible"><p>Congratulatios! it seems you have a nice success notice</p></div>
    <div class = "notice notice-error"><p>What a nice error message</p> </div>
    <div class = "notice notice-warning"><p>WARNING!!! site about to blow up in pieces</p></div>
    <div class = "notice notice-info is-dismissible"><p>INFO - you must renew license</p></div>

    <?php
  }
  add_action( 'admin_notices', 'display_admin_notice' );
  
/* Stop admin notices on */
?>
