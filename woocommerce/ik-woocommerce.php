<?php

//Remove the submenus from extentions
function ik_wc_remove_admin_submenus() {
    remove_submenu_page( 'woocommerce', 'wc-addons' );
	remove_submenu_page( 'woocommerce', 'wc-status' );

};

add_action( 'admin_menu', 'ik_wc_remove_admin_submenus', 999 );
