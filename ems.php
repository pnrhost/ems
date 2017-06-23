<?php
/*
Plugin Name: Ems
Plugin URI: pnrhost.com
Description: Adds Elearnings functionality to wordpress 
Version: 1.0
Author: PNRHOST
Author URI: pnrhost.com
Text Domain: Pnrhost
Released under the GNU General Public License (GPL)
http://www.gnu.org/licenses/gpl.txt
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define('EMS_PLUGIN_DIR',plugin_dir_path(__FILE__));

add_action('admin_menu', 'my_menu_pages');
function my_menu_pages(){
    add_menu_page('EMS', 'EMS', 'manage_options', 'my-menu', 'my_menu_output' );
    add_submenu_page('my-menu', 'Exam Boards', 'Whatever You Want', 'manage_options', 'my-menu' );
    add_submenu_page('my-menu', 'Course Category', 'Whatever You Want2', 'manage_options', 'my-menu2' );
    add_submenu_page('my-menu', 'Course Levels', 'Whatever You Want2', 'manage_options', 'my-menu2' );
    add_submenu_page('my-menu', 'Course modules', 'Whatever You Want2', 'manage_options', 'my-menu2' );
    add_submenu_page('my-menu', 'Students', 'Whatever You Want2', 'manage_options', 'my-menu2' );
    add_submenu_page('my-menu', 'Teachers', 'Whatever You Want2', 'manage_options', 'my-menu2' );
    add_submenu_page('my-menu', 'Settings', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}


register_uninstall_hook(__FILE__, "ems_uninstall");

// Do not pollute other plugins
unset($conf);
