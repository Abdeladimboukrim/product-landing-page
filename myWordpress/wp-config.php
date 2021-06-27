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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}:;D=7*yODt=mPe~DJw+1AZ9Lq:<J[_~|qkOsssPjS2ol4M-BtAb@^;ta]%kSD}V' );
define( 'SECURE_AUTH_KEY',  '(ByDUF# b3%<^ZC#//-tTE<X77UtF:wuvKxCM6Ql0A2P`k^x r0t^hJTn<]8o>{Z' );
define( 'LOGGED_IN_KEY',    '=z5Yn[YOFOT4kXOrdEtHOkNT%844Hy;s,!xkaFsMas,cP8IPG..1=|uN)^K+!WEa' );
define( 'NONCE_KEY',        '#P|s6g3lP-O!LZw|yTly0F|RA9$LW`|tNM93bo$<8jg),efOG(c2i{Ja5&*r0obe' );
define( 'AUTH_SALT',        'Om<D~~,1:G7!RcNN_1hZ{`/rVHkc$%P7}R/?5j[OQYU4TSH}jq]$RspDKV;yz*#n' );
define( 'SECURE_AUTH_SALT', '$jFnRz1F-A2|{7`.>0;g:TgDiWk!g|Tf_Kn_Cs.`B!Oy~g0c>2 _ &/MOH{%Ib;4' );
define( 'LOGGED_IN_SALT',   'r_BpL:fFFPf03|9woN>g.6N!iOVBNqvj.:?;f}hn.7t;Se@D6Xm`]!4/n6VsDk! ' );
define( 'NONCE_SALT',       'Go%JlL9N;#$;mAs]Sqo8r<?&?)`UP;E9PA9N>q6k2YBK-=,z0j6Q1`c]-k)`8%>.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
