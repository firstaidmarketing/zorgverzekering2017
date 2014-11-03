<?php
/*
This is a sample wp-local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define('DB_NAME', 'uprise_mcnw');
define('DB_USER', 'uprise_wp');
define('DB_PASSWORD', 'uVJcDOH0');
define('DB_HOST', 'localhost');

define('WP_DEBUG', false );
define('SCRIPT_DEBUG', true );
define('FS_METHOD','direct');

define('WP_HOME', 'http://loc.mercycorpsnw.org');
define('WP_SITEURL', 'http://loc.mercycorpsnw.org');
