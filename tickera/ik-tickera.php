<?php

//Remove the submenus from extentions
function ik_tc_remove_admin_submenus() {
    remove_submenu_page( 'edit.php?post_type=tc_events', 'tc_addons' );
};

add_action( 'admin_menu', 'ik_tc_remove_admin_submenus', 999 );