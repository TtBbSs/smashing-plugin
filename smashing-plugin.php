<?php
/*
	Plugin Name: A - TBS
	Description: Support plugin.
	Version: 1.1.1
	Author: TBS
	Author URI: http://github.com/TtBbSs
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'TtBbSs' );
$updater->set_repository( 'smashing-plugin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
