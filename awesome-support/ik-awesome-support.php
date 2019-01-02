<?php

//set awesome support to saas mode on
define('WPAS_REMOTE_NOTIFICATIONS_OFF', true) ;
define( 'WPAS_SAAS', true );

//Remove the submenus from extentions
function ik_as_remove_admin_submenus() {
	//if (!current_user_can('install_plugins'))
	//Awesome Support
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-addons' );
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-optin' );
	remove_submenu_page( 'edit.php?post_type=ticket', 'wpas-status' );
}
add_action( 'admin_menu', 'ik_as_remove_admin_submenus', 999 );
