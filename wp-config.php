<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agen4346_wp489' );

/** Database username */
define( 'DB_USER', 'agen4346_wp489' );

/** Database password */
define( 'DB_PASSWORD', '60zj!4Sp.B' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hrzbni6feghc9q294mq4lhbaipynjpeqtgwlmldhxrtfftjf0wpc8gx3z3oy3a7b' );
define( 'SECURE_AUTH_KEY',  'dbsxshqsbo8ogutx0cilebjd6rf0srabnt9wxxpooexgp7mmjh0nefd5h5jwn4lb' );
define( 'LOGGED_IN_KEY',    'b2hdapoyu087pddov3xcdhb3nhebrjv8kjcupnt09kdauhvpmhv9gjuypvi4squl' );
define( 'NONCE_KEY',        '8v6qapzzf3jfgyzxteixwh6lpuwzh6se8kc3qj2xrpcp7fd2xzxb1r12zlknqdtz' );
define( 'AUTH_SALT',        'bycewlqcwikg7xdwyaqgjihfcu4azclq8xmxxnhxhglmbvnm2xywhfxzhyxniena' );
define( 'SECURE_AUTH_SALT', '03ptksvc3m0xsh4frb5kqgqqwgvgj2hc39tex4eoq3ceyh35byrv5vn5frcgv9oj' );
define( 'LOGGED_IN_SALT',   'mf7kan86juyv8tn4pkguvshspcmnocikgswpqniwi8zfy4ruabttk8ofl7rqfqpr' );
define( 'NONCE_SALT',       'w6brsef1njzbwp2ltkcinhqtxftbzetmwplx30ttcfbnc8glqmz5yctj2muohzsc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9v_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
