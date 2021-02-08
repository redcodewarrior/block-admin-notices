# block-admin-notices
Plugins to block/hide admin_notices from another Plugin
These will be a series of Plugins to generate admin_notices and then block/hide them toi choose the better way to do it


I created several plugins to test many ways to block/hide admin_notices.
Of course, the plugins have their functions and hooks

Finally, I uploaded the final one; the plugin that will  remove
rocket_warning_htaccess_permissions
rocket_warning_config_dir_permissions
from WP Rocket itself

The folders contain the PHP files (same name as folders) that perform these tasks:

Block_ONLY_DISMISSABLE_admin_notices
ONLY blocks dismissible admin notices

Block_admin_notices
a nice way to block admin and user logged notices

Block_all_admin_notices
it just does that with CSS

admin_notices_on
the plugin I used to generate all 4 admin_notices to remove/block with the previous Plugins

remove_action
this is the final Plugin that removes the action from another Plugin

wx remove notices from wprocket
and this is the one you can try with WP Rocket that will remove
rocket_warning_htaccess_permissions
rocket_warning_config_dir_permissions
notifications
