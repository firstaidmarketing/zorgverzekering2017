<?php
/**
 * User: Roeland Werring
 * Date: 09/11/14
 * Time: 16:43
 *
 * Configure this your dbase in constants below to get serious speed improvement
 * All ajax requests will outcircle wordpress engine.
 *
 * You need to add following code to index.php:
 *
 * define( 'KOMPARUPLUGINDIR', dirname( __FILE__ ) . '/wp-content/plugins/compmodule/' );
 *  require_once( KOMPARUPLUGINDIR . 'fastRequestHandler.php' );
 *
 */

require( dirname( __FILE__ ) . '/funcs.php' );


/**
 * Komparu speedhack: Loads ajax requests before WP, add this to your index.php
 *
* define( 'KOMPARUPLUGINDIR', dirname( __FILE__ ) . '/wp-content/plugins/compmodule/' );
* if (file_exists(KOMPARUPLUGINDIR . 'fastRequestHandler.php')) {
*   require_once( KOMPARUPLUGINDIR . 'fastRequestHandler.php' );
* }
 *
 *
 */

function fastInjectModule() {
	global $komparuArgArr;
	try {
		injectKomparuModule( $komparuArgArr );
	} catch( Exception $e ) {

	}
}

fastInjectModule();

