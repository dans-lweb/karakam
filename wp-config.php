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
define('DB_NAME', 'karakam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'pkzK^{@#b`TLiO_I^OiO^ybQR{-_C3>I,B / [iZc-:aY)&*G*L1@7E$}e/d>Cax');
define('SECURE_AUTH_KEY',  'quQu2|m6hRzL{5kO)]<8(C^-AH-p,7fKL;-nn}Q95]M.T7zIFVdv^;H0wB[qJ4+~');
define('LOGGED_IN_KEY',    '[$oH7K#f=u-vW-qs9!@GVgJ%o>dn8r|ud=WpZ>_N-N7_b?AWL:yHt}eTUa`lm@<7');
define('NONCE_KEY',        'uwD6[fY(j7vO~YMei(%LeQ>^Lk%{OnV6bJ^xY38f@.8<.xUkWhgNN6.8XuY=!|sG');
define('AUTH_SALT',        'F)YJRNReW-b/3yn}A;s4Qdo+nWA)|mv:rYQVe)m3_Ty~>R]:|6h}:45Lw9dE_}(k');
define('SECURE_AUTH_SALT', 't1#J}(,XXCJ!pR;+}B *gL!|C+TCIY@}7;jC]a1DKC=YJ@.ljP`&%%I X9C@W|K]');
define('LOGGED_IN_SALT',   'Hs<>rik]:9`Y85DAo^]m{m<&eqFGH-7pdp74.F+Ov`Q+x=0y!b0MrGo`(L2<n7!,');
define('NONCE_SALT',       ':H?XXZ3sSx(Eg-FL2Et69#cJOkq2hB1}uCDF`|=%Ke@i(iom5m5t}HCcHRy.hQ`[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kk_';

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
