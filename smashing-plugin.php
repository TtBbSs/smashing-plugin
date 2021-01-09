<?php
/*
	Plugin Name: A - TBS
	Description: Citats.
	Version: 1.2.3
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
	$updater->authorize( '894642da381896244de2ff9abf2d74a9e323d221' ); // Your auth code goes here for private repos
*/
$updater->initialize();


function smashing_plugin_get_citat() {
	$citats = array();

	$citats[1] = array(
		"quote" => "This here is a really good quote",
		"attribution" => "Theodore Roosevelt"
	);

	shuffle($citats);
	function get_random_citat($quote_id, $quote) {
		$output = "";
		$output = '<h1>' . $quote["quote"] . '.</h1>';
		$output .= '<p>' . $quote["attribution"] . '</p>';
		return $output;
	}
	$random = $citats[array_rand($citats)];
// And then randomly choose a line
	$citat_send = $random["quote"];
	$citat_send .= $random["attribution"];
	return $citat_send;
}

// This just echoes the chosen line, we'll position it later
function smashing_plugin() {
	$chosen = smashing_plugin_get_citat();
	echo "<p id='spcitat'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'smashing_plugin' );

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

add_action( 'admin_head', 'smashing_plugin_css' );
