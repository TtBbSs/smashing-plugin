<?php
/**
* WP Post Disclaimer*
* Copyright(c) 2019 Krunal Prajapati
**/
if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) :
	exit; // Exit if accessed directly.
endif; //Endif

//define a vairbale and store an option name as the value.
$plugin = 'smashing-plugin';
//call delete option and use the vairable inside the quotations
delete_option($plugin);
// for site options in Multisite
delete_site_option($plugin);
// delete plugin transient
delete_transient($plugin);
?>
