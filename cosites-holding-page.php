<?php
/**
* Plugin Name: Cosites Holding Page
* Plugin URI: https://github.com/ArthurDoom/cosites-holding-page/
* Description: A Wordpress Plugin that displays a holding page with Cosites branding
* Version: 1.0
* Author: Walter Craig
* Author URI: https://cosites.co.uk
* License: GPL12
*/

//Add the maintenance page
function ng_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( 'HTTP/1.1 Service Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ng_maintenance_mode' );
