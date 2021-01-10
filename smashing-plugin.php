<?php
/*
	Plugin Name: A - TBS
	Description: Citats.
	Version: 1.3.1
	Author: TBS
	Author URI: http://github.com/TtBbSs
*/
// Cache kontrol
Header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

// Luk hvis ikke har tilladesle til at se denne fil
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'TtBbSs' );
$updater->set_repository( 'smashing-plugin' );
/*
	$updater->authorize( '894642da381896244de2ff9abf2d74a9e323d221' ); // Your auth code goes here for private repos
*/
$updater->initialize();


function smashing_plugin_get_citat() {
	$citats = array();

	$citats[1] = array(
		"q" => "This here is a really good quote",
		"a" => "Theodore Roosevelt"
	);

	shuffle($citats);
	function output_citat($attribution, $quote) {
		$output = "";
		$output = '<h1 id="spcitat" title="' . $attribution . '">' . $quote . '.</h1>';
		return $output;
	}
	$random = $citats[array_rand($citats)];
	echo $citat_send;
	// And then randomly choose a line
	$citat_q = $random["q"];
	$citat_a = $random["a"];
	echo output_citat($citat_a, $citat_q);
}

// This just echoes the chosen line, we'll position it later
//function smashing_plugin() {
//	$chosen = smashing_plugin_get_citat();
//	return $chosen;
//}
// We need some CSS to position the paragraph
function smashing_plugin_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#spcitat {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'smashing_plugin_get_citat' );
add_action( 'admin_head', 'smashing_plugin_css' );
