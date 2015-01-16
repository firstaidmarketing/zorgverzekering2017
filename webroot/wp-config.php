<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	define( 'WP_ENV', 'local' );
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
}
elseif ( file_exists( dirname( __FILE__ ) . '/../../env_production' ) ) {

    // Production Environment
    define( 'WP_ENV', 'production' );
    define( 'WP_DEBUG', false );
    define( 'WP_CACHE', false );

    define( 'DB_NAME', 'nlkeuz-embrasure' );
    define( 'DB_USER', 'nlkeuz-embrasure' );
    define( 'DB_PASSWORD', 'f267caf3-cbd2-40cd-a291-025dc719ccf7' );
    define( 'DB_HOST', 'localhost' );

}
else {

	// Environment definition is mandatory
	die("Environment not defined. Please see wp-config.php");

}

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'kC*s|q9oW]{og9&xuEmnK+AF]jH~ar|TDld]F<XFV+UU;Z|j6-Lqy}b0LaIaC|+*');
define('SECURE_AUTH_KEY',  'S:n9J)HHs4OrPU_BqY6/j2_<$pG3%+8{N-_Fl/zZ2fEe/qd-3gYKw;,Y}>`b;IY^');
define('LOGGED_IN_KEY',    'FImvS>{5qQXHo{5Sh,_Fg{R4S-Jr i04)OTNH(ws=Om@AZe8}l1cx-!.gd+bmN*6');
define('NONCE_KEY',        'kD|Ek%-O3-0xedT`Um%v<m?m0e]xEv#33$})~`+Ip rr[||w40SC3V:Sc8#T>psT');
define('AUTH_SALT',        '`e<+Fd;ss-3ba>`1r]>3w{LuZ:ui+(g#MZ@,fFb8%Ar/]KP]yvZG}+5{ua*!8{WH');
define('SECURE_AUTH_SALT', '&L8zh)f0SnN[z4C+a04_[`KLteNEoB490/MHXGu%7b|1-R&f<RrBG;yalvZR+-PW');
define('LOGGED_IN_SALT',   'QV_^[cqd2!O~Y5}Fabz/ja||t@t_7U9e5+G+kUF{jM[gZV+uhg#r=gcgjH+Y 9h#');
define('NONCE_SALT',       'Qd<qs/|+Go6NR7&x4,aoFbZ!26+kU9ln;&0t}8sf-U1`q4tB3o+6Q</1f 0M4cNx');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'kzwp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Miscellaneous settings
// ===========

// W3TC will otherwise keep nagging because we have changing paths
define( 'DONOTVERIFY_WP_LOADER', true );


// We won't be needing the theme editor :)
define('DISALLOW_FILE_EDIT', true);

// Turn off error reporting when using WP CLI
if ( defined('WP_CLI') && WP_CLI ) {
    // error_reporting(0);
    // ini_set( "log_errors", 0 );
}


// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
// if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
// 	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
// define( 'WP_STAGE', '%%WP_STAGE%%' );
// define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
