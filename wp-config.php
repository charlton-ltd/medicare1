<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medicare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'fjA}QdbGsn5+zKu+E< %0N.6~1dr%oG|ZhZIrtq^v~Iax>[rEIu-qP98WM~2`+0{' );
define( 'SECURE_AUTH_KEY',  'xwG&!~MQuCW&<RcLE&F 6+F}i^TYZ+M;S:1Eu_%zz>K4-!Uu*q!0e#eN0G~-%|C3' );
define( 'LOGGED_IN_KEY',    'c_tnP&-S-~ee[GA-TNVS^syfaII5{j$)l4m!i)&}wdZZ.YFfQQz@Zv=4fUGgEe!Y' );
define( 'NONCE_KEY',        '/3l?>t$ q*o+i[X{/ECDYDq-3 2q9[R)-FZ/9MMB2s,kF`}FI?Nk#KAWZai$9FS4' );
define( 'AUTH_SALT',        '{Xw1MTXNPb>}|586! :;&!gf/WalkOm4_xc-ZVS^j$D^^(]9,%=dxB64@Sw+.^B)' );
define( 'SECURE_AUTH_SALT', 'vZLl4^dK8Lyvk8%=J#wSlKCx<X!G7L$k73O@35^.Iww@cW@<NsN@+Q;Uid(jFu+3' );
define( 'LOGGED_IN_SALT',   'nj -z+lO)RF6[&6cYW9;hx;IlE2@P.}Py9fg5eHnM-%92[aXDFJ#2%9<lCdXiM|t' );
define( 'NONCE_SALT',       '7<evg1[B.l/C)nyX&.E))]*2gsJG0]9JiJPUYD-|-gIi({JA,LC0 1a6 /OPGWj`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
