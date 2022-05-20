<?php
# WP SETUP
define('WP_CACHE_KEY_SALT', 'bprovolo.42.fr');
define('WP_CACHE', true);
define('DB_NAME', 'wp');
define('DB_USER', 'bprovolo');
define('DB_PASSWORD', 'klop');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '' );
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix = 'wp_';

if ( !defined('ABSPATH') )
	define('ABSPATH', '/var/www/html/wordpress');

require_once ABSPATH . 'wp-settings.php';
