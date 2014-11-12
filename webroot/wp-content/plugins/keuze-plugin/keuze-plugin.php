<?php
/*
Plugin Name: Keuze.nl plugin
Description: Extra functionalitety for Keuze.nl website
Version: 1.0
Author: Arjan Snaterse <arjan@uprise.nl>
Author URI: http://www.uprise.nl
*/


# Include classes
require_once( 'classes/class-core.php' );

# Load classes
add_action( 'plugins_loaded', function() {
	$keuze_core = Keuze_Core::get_instance();
});

?>