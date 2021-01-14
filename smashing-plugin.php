<?php
/*
	Plugin Name: A - TBS
	Description: Citats.
	Version: 1.4.4
	Author: TBS
	Author URI: http://github.com/TtBbSs
*/
register_activation_hook( __FILE__, 'child_plugin_activate' );
function child_plugin_activate() {
	// Require parent plugin
	if (!is_plugin_active( 'TBS/TBS.php') and current_user_can('activate_plugins')) {
		// Stop activation redirect and show error
		wp_die('Vi beklager! Dette plugin kræver at TBS hovedplugin er aktiveret! <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Gå til Plugins</a><br><a href="https://github.com/TtBbSs/TBS">Hent TBS hovedplugin her</a>');
	}
}

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
		"q" => "This here is a really good quote.",
		"a" => "Theodore Roosevelt"
	);
	// LIVET
	$citats[2] = array(
		"q" => "Alt, hvad jeg ved, er, at jeg intet ved.",
		"a" => "Sokrates"
	);
	$citats[3] = array(
		"q" => "Det har jeg aldrig gjort før, så det klarer jeg helt sikkert.",
		"a" => "Pippi Langstrømpe"
	);
	$citats[4] = array(
		"q" => "Find ikke fejl, find en løsning.",
		"a" => "Henry Ford"
	);
	$citats[5] = array(
		"q" => "Vær dig selv, alle andre er alligevel optaget.",
		"a" => "Oscar Wilde"
	);
	$citats[6] = array(
		"q" => "Når du står i lort til halsen, er alt, hvad du kan gøre, at synge.",
		"a" => "Samuel Beckett"
	);
	$citats[7] = array(
		"q" => "Du misser 100 procent af de skud, du ikke tager.",
		"a" => "Wayne Gretzky"
	);
	$citats[8] = array (
		"q" => "Kend reglerne, så du ved, hvordan du bryder dem ordentligt.",
		"a" => "Dalai Lama"
	);
	$citats[9] = array(
		"q" => "Ingen kan få dig til at føle dig mindreværdig uden din tilladelse.",
		"a" => "Eleanor Roosevelt"
	);
	$citats[10] = array(
		"q" => "Man genkender ikke sit livs vigtige øjeblikke, før det er for sent.",
		"a" => "Agatha Christie"
	);
	$citats[11] = array(
		"q" => "Det er min erfaring, at mennesker uden laster heller ikke har nogle dyder.",
		"a" => "Abraham Lincoln"
	);
	$citats[12] = array(
		"q" => "Lykken bliver aldrig mindre af at blive delt.",
		"a" => "Buddha"
	);
	$citats[13] = array(
		"q" => "Erfaringen er en god læremester, men hun sender afsindig dyre regninger.",
		"a" => "Minna Antrim"
	);
	$citats[14] = array(
		"q" => "Hvis man præcis ved, hvad man skal gøre, hvorfor så gøre det?",
		"a" => "Pablo Picasso"
	);
	$citats[15] = array(
		"q" => "Først sent har man modet til det, som man egentlig godt ved.",
		"a" => "Friedrich Nietzsche"
	);
	$citats[16] = array(
		"q" => "Husk, at for hvert minut du er vred, mister du tres sekunders lykke.",
		"a" => "Ralph Waldo Emerson"
	);
	$citats[17] = array(
		"q" => "Jeg har misset flere end 9.000 forsøg i min karriere. Jeg har tabt næsten 300 kampe. 26 gange har det været op til mig at score det afgørende point, hvor jeg har kikset. Jeg har fejlet igen og igen og igen i mit liv. Og det er derfor, jeg har fået succes.",
		"a" => "Michael Jordan"
	);
	$citats[18] = array(
		"q" => "Når du går gennem Helvede, så bliv ved med at gå!",
		"a" => "Winston Churchill"
	);
	$citats[19] = array(
		"q" => "At blive gammel er ikke andet end en dårlig vane, som travle mennesker ikke har tid til at tillægge sig.",
		"a" => "André Malraux"
	);
	$citats[20] = array(
		"q" => "Jeg har haft tusinder af bekymringer, de færreste er blevet til noget.",
		"a" => "Mark Twain"
	);
	$citats[21] = array(
		"q" => "Hvis du er lykkelig, er det sandsynligvis din egen skyld, for der er masser af ting i verden at være ulykkelig over.",
		"a" => "Storm P"
	);
	$citats[22] = array(
		"q" => "Der er en revne i alting, det er sådan, lyset kommer ind.",
		"a" => "Leonard Cohen"
	);
	$citats[23] = array(
		"q" => "Livet er det dejligste eventyr.",
		"a" => "H.C. Andersen"
	);
	// KÆRLIGHED
	$citats[24] = array(
		"q" => "Kærlighed er det eneste, der vokser, jo mere man ødsler med det.",
		"a" => "Ricarda Huch"
	);
	$citats[25] = array(
		"q" => "Det er bedre at være ulykkelig alene end ulykkelig sammen med én.",
		"a" => "Marilyn Monroe"
	);
	$citats[26] = array(
		"q" => "Sand kærlighed begynder dér, hvor der ikke ventes gengæld.",
		"a" => "Antoine de Saint-Exupéry"
	);
	$citats[27] = array(
		"q" => "Hvis du husker mig, er jeg ligeglad med, om alle andre glemmer.",
		"a" => "Haruki Murakami"
	);
	$citats[28] = array(
		"q" => "Det er bedre at have elsket og mistet end slet ikke at have elsket.",
		"a" => "Alfred Lord Tennyson"
	);
	$citats[29] = array(
		"q" => "Kærlighed er en ild. Men om den kommer til at varme dit hjerte eller brænde dit hus ned, kan du aldrig regne ud.",
		"a" => "Joan Crawford"
	);
	$citats[30] = array(
		"q" => "Du ved, du er forelsket, når du ikke kan falde i søvn, fordi virkeligheden er bedre end dine drømme.",
		"a" => "Dr. Seuss"
	);
	$citats[31] = array(
		"q" => "Hvis man dømmer mennesker, har man ikke tid til at elske dem.",
		"a" => "Mother Teresa"
	);
	$citats[32] = array(
		"q" => "Der er to mænd i verden, der bestandig krydser min vej, den ene er ham jeg elsker, den anden elsker mig.",
		"a" => "Tove Ditlevsen"
	);
	$citats[33] = array(
		"q" => "Man skal ikke lade solen gå ned over sin vrede.",
		"q" => "Biblen – Efeserbrevet 4, 26"
	);
	$citats[34] = array(
		"q" => "Elsk alle, stol på nogle få, gør ondt mod ingen.",
		"a" => "William Shakespeare"
	);
	$citats[35] = array(
		"q" => "Kærlighed er en tilstand, hvor en anden persons lykke er afgørende for din egen.",
		"a" => "Robert A. Heinlein"
	);
	$citats[36] = array(
		"q" => "Hvis kærligheden er en illusion, så til helvede med virkeligheden.",
		"a" => "Elsa Gress"
	);
	$citats[37] = array(
		"q" => "Jeg elsker dig ikke for den, du er, men for den, jeg er, når jeg er sammen med dig.",
		"a" => "Roy Croft"
	);
	// VENSKAB
	$citats[38] = array(
		"q" => "En ven er én, der ved alt om dig og stadig elsker dig.",
		"a" => "Elbert Hubbard"
	);
	$citats[39] = array(
		"q" => "Gode venner kan lave alting sammen – men kun de bedste venner er i stand til at lave ingenting sammen.",
		"a" => "Peter Plys"
	);
	$citats[40] = array(
		"q" => "Venskab er én sjæl i to legemer.",
		"a" => "Aristoteles"
	);
	$citats[41] = array(
		"q" => "Der er endnu ikke et ord for gamle venner, der lige har mødt hinanden for første gang.",
		"a" => "Jim Henson"
	);
	$citats[42] = array(
		"q" => "Alle kan sympatisere med en lidende ven, men det kræver en meget fin natur at sympatisere med en vens succes.",
		"a" => "Oscar Wilde"
	);
	$citats[43] = array(
		"q" => "Det er bedre at kende én bog indgående end at kende hundrede overfladisk.",
		"a" => "Donna Tartt"
	);
	$citats[44] = array(
		"q" => "Det bedste spejl er en gammel ven.",
		"a" => "George Herbert"
	);
	$citats[45] = array(
		"q" => "Kærlighed er den eneste kraft, der er i stand til at forvandle en fjende til en ven.",
		"a" => "Martin Luther King, Jr."
	);
	$citats[46] = array(
		"q" => "Ryg som en skorsten, arbejd som en hest, spis uden at tænke – og gå kun en tur i virkelig behageligt selskab.",
		"a" => "Albert Einstein"
	);
	$citats[47] = array(
		"q" => "Der findes tre trofaste venner: en gammel hustru, en gammel hund og rede penge.",
		"a" => "Benjamin Franklin"
	);
	$citats[48] = array(
		"q" => "Når en kvinde bliver sin egen bedste ven, bliver livet lettere.",
		"a" => "Diane Von Furstenberg"
	);
	$citats[49] = array(
		"q" => "Den eneste måde at finde ud af, om en person er til at stole på, er at stole på ham.",
		"a" => "Ernest Hemingway"
	);
	$citats[50] = array(
		"q" => "Der findes ingen fremmede, kun venner vi ikke kender.",
		"a" => "Samuel Pepys"
	);
	$citats[51] = array(
		"q" => "Vi bliver født alene, vi lever alene, og vi dør alene. Kun gennem vores kærlighed og venskab kan vi skabe en illusion om det øjeblik, at vi ikke er alene.",
		"a" => "Orson Welles"
	);


	shuffle($citats);
	function output_citat($attribution, $quote) {
		$output = "";
		$output = '<h1 id="spcitat" title="' . $attribution . '">' . $quote . '.</h1>';
		return $output;
	}
	$random = $citats[array_rand($citats)];
	// And then randomly choose a line
	$citat_a = $random["a"];
	$citat_q = $random["q"];
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
