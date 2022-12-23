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
define('DB_NAME', 'cl48-shsdb');

/** MySQL database username */
define('DB_USER', 'cl48-shsdb');

/** MySQL database password */
define('DB_PASSWORD', 'KmdNY!6gC');

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
define('AUTH_KEY',         'ddl6coVT?7}KlC@W7={6e}wuPgFnt$nFdVp`+Z~^9t~*ii/5|P vdCNeTW$2$sTb');
define('SECURE_AUTH_KEY',  'i86n# qShTM1G1TD0~-O1l:5@g_{S`pfIT<}ooh?=?Ac0S= _ik>D7{VcL39S{:5');
define('LOGGED_IN_KEY',    'O1>Q0.xxIGHzo~-yIX?6Oto!vKc<d.fA&h#J+iT]Q!T%5|SMZOpvr?U`&l<4l|c=');
define('NONCE_KEY',        'f|8eCCd,x*%ktKK]F6+x1gQp~E~ye9_msnh8>*?gf+f=Lz>b^tn!g`.C)k,VT*IF');
define('AUTH_SALT',        '.)4l}XG@LSvm+/H[ 27;SWBXbga>0*]I1_kO:}zsg%5{_{Rib1zlZ|v>`XqIDp X');
define('SECURE_AUTH_SALT', '*48qak%pciOT(D+:z@oi>L4a8Oe`9^d<mzYjtxulD6lfW/+WSFMT0(+Fw.x=K,/x');
define('LOGGED_IN_SALT',   'D$o$g.k:)Oyy=65eW6v@sBa0n Fj(?Wd`6i1+I)qJhbxqU)5[WW:,u?Y*eyow]w8');
define('NONCE_SALT',       'Xe2d#e6z<|VF[I@x!sE`x*s*@|YT>$FEB#1]bUqP0~[W(>1:sRkr%~[W$Q[)!W`;');

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
