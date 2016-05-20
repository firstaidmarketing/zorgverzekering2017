<?php
/*
This is a sample wp-local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define('DB_HOST', 'localhost');

define('WP_DEBUG', true );
define('SCRIPT_DEBUG', true );


define('WP_HOME', 'http://loc.keuze.nl');
define('WP_SITEURL', 'http://loc.keuze.nl');
