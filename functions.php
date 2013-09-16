<?php
require_once('library/siteframework.php');		// core functions
require('theme-options.php');          			// theme options

// Custom login
function my_custom_login_logo() {
    echo '<style type="text/css">
        #login h1 a { height: 150px !important; margin-top: -3em !important;
		}
    </style>';
}

add_action('login_head', 'my_custom_login_logo');


// Remove Widgets do Wp-Admin
function remove_dashboard_widgets() {
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


?>