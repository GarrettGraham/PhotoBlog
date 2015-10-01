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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@x|k?y8 !8c?u)4%Hw,r1|WO_)z@-KP $p@rlP/GLRt]7 iNK<9JCtg,*5$24xnn');
define('SECURE_AUTH_KEY',  '-Bp6`eh$wbvw3eap-+n>c /P?B|ANn-Ax$et&#@[v0iw)2BU>T+Vu;9Ct9k:tZM^');
define('LOGGED_IN_KEY',    '/K-sE-H82Z593lKsLC7OH)$ RY+*?mxN&^YXj~$F=;,nWmPn4F.$1}LyMl1IcYYj');
define('NONCE_KEY',        '^J?<W(5<2y-J_!9+Xl7JUf(8s/ hlCQ0S!t?7++,MzpmJ/m[:UP1Q]KTJ%llvkaw');
define('AUTH_SALT',        '_#rK9Ez6K76u%N.6qZQ>)n6dz;|X[&$yVKITy C/l]Y;s12>+4TZ|$EH5ww#=aL5');
define('SECURE_AUTH_SALT', 'Tpr?j%hbqpc}<A|yHx7`R=.Y24T-C|+-h;|WJVoYp,m:f8JDa[O]{f~-&68x:TE(');
define('LOGGED_IN_SALT',   ')pHyeetBnGLA5I^k)cYd_^dB4vJ5]h@;WSq077b02;boSe@xaC=F49R|eZX4g8Ma');
define('NONCE_SALT',       'L3rxS9TVLmW7E H59,RiFS#i[_4YLn>|(DHp}ME|&z@.eOe7-z]RztKjG wn:gc:');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
