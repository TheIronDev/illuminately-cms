<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordpress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N=w-S^_DozJQNv+hlJBLh8`vDrz{V%F2fJZ~S T681`W8m{<6%:Aa8I8/L]z<$n]');
define('SECURE_AUTH_KEY',  '>IsS,vj;g[-U1^- 5#Z@Fpk2%OAo2QuvoZ>kvwWAYZr&c4o?wOim*V,Q),%|-.D@');
define('LOGGED_IN_KEY',    '+kJ^L$Vr`Z8Xy| <}/h-9-EB]j;]?1>N=rAyhB-~;D^Ef#%^Hk)iBJZ$v4p|xX:p');
define('NONCE_KEY',        'glD[%DoBl9-Wi|-&zj#bMQU2PAq-F|=0fJs?`;>7Z!Kh/e5f-_A#+{oDljQ@8SUr');
define('AUTH_SALT',        'F3-faMcf[Y`[+Vi8S$CBc{u3i;Gln]vr=+QLfv?S,@3n7>lC>UQN;o~[UheLhR[2');
define('SECURE_AUTH_SALT', 'Rw-gE#cY=.U~18koY#v |*qkG8/#4t; 2_5>lss}PPn)+_:n{@}E&+{.9A)$671S');
define('LOGGED_IN_SALT',   '85hJv|{B&h`}|^p^rN:M#V_-i++|p&okgKDP|8;6Q2z=E-@/ARq#~p94|,2S2iZN');
define('NONCE_SALT',       '~k-QCU~(k02 |3TkBKRDAbG(/-O=+%J68Z<4B8A3 7?QndBSfkrcw1-2Bj(5K_58');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
