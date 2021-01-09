<?php
/*
	@package smashing-plugin
	@version 1.2.0
*/
/*
	Plugin Name: A - TBS
	Description: Citats.
	Version: 1.2.0
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


function smashing_plugin_get_citat() {
	/** These are the phrases of Stranger Things */
	$phrases = "Mornings are for coffee and contemplation.
							You shouldn’t like things because people tell you you’re supposed to.
							Lando!
							Friends don’t lie.
							If anyone asks where I am, I’ve left the country.
							Sometimes, your total obliviousness just blows my mind.
							I’m stealthy, like a ninja.
							I don’t care if anyone believes me.
							Why are you keeping this curiosity door locked?
							What’s at the X? Pirate treasure?
							Am I dreaming, or is that you, Harrington?
							Yeah, it’s me. Don’t cream your pants.
							How do you know it’s not just a lizard?
							Because his face opened up and he ate my cat!
							Bitchin’
							You smell that, Max? That’s actually shit. Cow shit.
							I don’t see any cows.
							Clearly you haven’t met the high school girls.
							Bob Newby, superhero.
							She will not be able to resist these pearls. *Purrs*
							Yeah. Crazy together.
							…It’s finger-lickin’ good
							Will? What are you doing?
							Hey guys, why are you headed towards the sound?
							Just curious why all of a sudden you look like some MTV punk.
							Dad? When Mom’s mad at you, how do you make her not mad?
							I asked if you wanted to be my friend. And you said yes. You said yes. It was the best thing I’ve ever done.
							Uhhh!
							It’s going to be okay. Remember, Bob Newby, superhero.
							I always thought stuff like this happened in movies and comic books.";

	// Here we split it into lines
	$phrases = explode( "\n", $phrases);

	// And then randomly choose a line
	return wptexturize( $phrases[ mt_rand( 0, count( $phrases ) - 1 ) ] );
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
