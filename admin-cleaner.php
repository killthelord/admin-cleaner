<?php 
/**
 * Plugin Name: Admin Cleaner
 * Plugin URI: http://www.dribbl.es
 * Description: Clean admin and dashboard page
 * Version: 0.0.1
 * Author: Killthelord
 * Author URI: http://twitter.com/rchmet
 * Requires at least: 3.3
 * Tested up to: 3.5
 */


add_action('admin_bar_menu', 'admincleaner_admin_bar_menu', 999);
add_action('admin_menu', 'admincleaner_admin_menu', 999);

function admincleaner_admin_bar_menu($toolbar){
	$toolbar->remove_node('wp-logo');
}

function admincleaner_admin_menu(){
	remove_menu_page('link-manager.php');
	remove_menu_page('tools.php');	
}