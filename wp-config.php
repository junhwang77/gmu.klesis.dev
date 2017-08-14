<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'klesisDBxehe8');

/** MySQL database username */
define('DB_USER', 'klesisDBxehe8');

/** MySQL database password */
define('DB_PASSWORD', '6KsSBbBsYK');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MQ<3C5VOw:|[_9hZws-s~RKkddoh4:OGNGR|@801C4ok!-v}|kczs4RJ;#H9tm_xq');
define('SECURE_AUTH_KEY',  'F]1Hx-~dlhGZ1[KCC5SKs[_[!C4Ebmtq<PHeW;Ha*]Dex]aea9S,7jv$Mfy3ME,7{');
define('LOGGED_IN_KEY',    '}!@ckgFY]D_~#d-wKDZOHdW:#D91OK~w_dVspwo-VOlh5:KC<2{eXuqqi*IAXPXPq');
define('NONCE_KEY',        'P#2x+~OatOHS#~511]Hph~x_-#ZSptG9WO3E6qj^$$u{TMjbif$uIALMEbT{.A2;L');
define('AUTH_SALT',        '[dt:Kd~1CswqAEA*{Iqi+<*TPmfmxqDAXPPbT<.A2;LDxt]*x;]eWiNFgY}700>JB');
define('SECURE_AUTH_SALT', 'lw1]SphldpD5SOWOld|C551OGp#:hd-ssl_-CZSbTqmA3PIIAX^y<<E6um.+$<*');
define('LOGGED_IN_SALT',   ':]xl~hO9IAXT<^7{,B3nj^y*y.XPmfjbyqEQIPIeX;<E66Mum.+<*6;itmme+xLE');
define('NONCE_SALT',       'K~:Rlb{;Eu2]Tqiib+uHAXPLia;#D9A2PH+t*#*52le+tt*xLDaSB3QJ$v^^z0>gY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
