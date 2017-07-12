<?php
/*
 * Plugin Name: Remove Google Analytics (MonsterInsights) comments
 * Plugin URI: https://wordpress.org/plugins/remove-google-analytics-comments/
 * Description: Removes the Google Analytics advertisement HTML comments from your front-end source code. Only for the MonsterInsights plugin.
 * Version: 1.0.1
 * Author: Mitch
 * Author URI: https://profiles.wordpress.org/lowest
 * License: GPL-2.0+
 * Text Domain: rgamc
 * Domain Path:
 * Network:
 * License: GPL-2.0+
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'RGAMC_FILE' ) ) { define( 'RGAMC_FILE', __FILE__ ); }

function rgamc_active( $plugin ) {
	$network_active = false;
	if ( is_multisite() ) {
		$plugins = get_site_option( 'active_sitewide_plugins' );
		if ( isset( $plugins[$plugin] ) ) {
			$network_active = true;
		}
	}
	return in_array( $plugin, get_option( 'active_plugins' ) ) || $network_active;
}

if ( rgamc_active( 'google-analytics-for-wordpress/googleanalytics.php' ) || rgamc_active( 'google-analytics-premium/googleanalytics.php' ) ) {
	add_action('get_header',function (){
		ob_start(function ($o) {
			return preg_replace('/\n?<.*?monsterinsights.*?>/mi','',$o);
		});
	});
	add_action('wp_head',function (){
		ob_end_flush();
	}, 999);
} else {
	add_action( 'admin_notices', function() {
		echo '<div class="notice notice-error is-dismissible"><p>Cannot activate <strong>Remove Google Analytics comments</strong>: Please activate <a href="http://wordpress.org/plugins/google-analytics-for-wordpress/" target="_blank">Google Analytics by MonsterInsights</a> plugin first before activating this plugin.</p></div>';
	});
	add_action( 'admin_init', function() {
		deactivate_plugins( plugin_basename( RGAMC_FILE ) );
	});
}

add_filter( 'plugin_action_links_' . plugin_basename( RGAMC_FILE ), function($link) {
	return array_merge( $link, array('<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2VYPRGME8QELC" target="_blank" rel="noopener noreferrer">Donate</a>') );
} );