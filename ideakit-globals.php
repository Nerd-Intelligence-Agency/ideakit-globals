<?php
/**
 * @package IdeaKit_Globals
 * @version 0.2.3
 */
/*
Plugin Name: IdeaKit Globals
Plugin URI: https://nerdintel.com/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Nerd Inelligence Agency
Version: 0.2.3
Author URI: https://getideakit.com/
*/

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

//Plugin update check
require plugin_dir_path( __FILE__ ).'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/Nerd-Intelligence-Agency/ideakit-globals/',
  __FILE__,
  'ideakit-globals'
);
//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('stage');

/**
 * Check if WooCommerce is active and use edits if so
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	include plugin_dir_path( __FILE__ ).'woocommerce/ik-woocommerce.php';
};

/**
 * Check if Awesome Support is active and use edits if so
 **/
if ( class_exists( 'Awesome_Support' ) ) {
  include plugin_dir_path( __FILE__ ).'awesome-support/ik-awesome-support.php';
};



//Remove the submenus from extentions
add_action( 'admin_menu', 'ik_glb_remove_admin_submenus', 999 );
function ik_glb_remove_admin_submenus() {
	if (!current_user_can('install_plugins'))
	//erp
	remove_submenu_page( 'erp', 'erp-addons' );
	//tickera submenus
	remove_submenu_page( 'edit.php?post_type=tc_events', 'tc_addons' );



}
?>
