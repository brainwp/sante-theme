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


?>