<?php
/**
 * @package IdeaKit_Globals
 * @version 1.6
 */
/*
Plugin Name: IdeaKit Globals
Plugin URI: https://nerdintel.com/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Nerd Inelligence Agency
Version: 0.0.1
Author URI: https://nerdintel.com/
*/

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
//Plugin update check
require plugin_dir_path( $file ).'/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/Nerd-Intelligence-Agency/ideakit-globals',
  __FILE__,
  'IdeaKit_Globals'
);

//set awesome support to saas mode on
define('WPAS_REMOTE_NOTIFICATIONS_OFF', true) ;
define( 'WPAS_SAAS', true );


//Remove the submenus from extentions
add_action( 'admin_menu', 'ik_wc_remove_admin_submenus', 999 );
function ik_wc_remove_admin_submenus() {
	if (!current_user_can('install_plugins'))
	//Awesome Support
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-addons' );
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-optin' );
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-status' );

	//woocommerce
	remove_submenu_page( 'woocommerce', 'wc-addons' );
	remove_submenu_page( 'woocommerce', 'wc-status' );

	//erp
	remove_submenu_page( 'erp', 'erp-addons' );

	//tickera submenus
	remove_submenu_page( 'edit.php?post_type=tc_events', 'tc_addons' );



}
?>
