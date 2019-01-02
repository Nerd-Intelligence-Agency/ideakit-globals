<?php

//Remove the submenus from extentions
function ik_erp_remove_admin_submenus() {
    remove_submenu_page( 'erp', 'erp-addons' );
};

add_action( 'admin_menu', 'ik_erp_remove_admin_submenus', 999 );