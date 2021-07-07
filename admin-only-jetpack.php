<?php
/**
 * Admin Only Jetpack
 *
 * @package admin-only-jetpack
 * @author  Andy Fragen
 * @license MIT
 */

/**
 * Plugin Name:       Admin Only Jetpack
 * Plugin URI:        https://github.com/afragen/admin-only-jetpack
 * Description:       Show Jetpack menu for Admin users only.
 * Version:           1.1.0
 * Author:            Andy Fragen
 * License:           MIT
 * Network:           true
 * Text Domain:       admin-only-jetpack
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/afragen/admin-only-jetpack
 * Requires at least: 4.9
 * Requires PHP:      5.3
 */

add_action(
	'admin_menu',
	function() {
		if ( class_exists( 'Jetpack' ) && ! current_user_can( 'manage_options' ) ) {
			remove_menu_page( 'jetpack' );
		}
	},
	999
);
