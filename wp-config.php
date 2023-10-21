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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user_02' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Jp/$&Crku&(K+Pga7&.ksbv}R-7qc/-4Wt!|(md|%}+W6U$a@N>OJ~X<4PI fgYV');
define('SECURE_AUTH_KEY',  ')SfJ4-a?h0^8%2Vgx1| 7XWBp6TXqn>-=l<K$oA,|/}L^v]f]F_?GdHKzR:Hm5%[');
define('LOGGED_IN_KEY',    'phhrVrf[B.c;SJqKxc}:<fp9)Z#nyz|!b+?#^}%uJ?Q/||6t^,46X)mDidYV6!`t');
define('NONCE_KEY',        '*Zj;FwkyU:26nM#+bOI.?<h_Z`lB[V$_D/_M,jK`_5nVY.-;|oAxK(3i~kw8&<{Y');
define('AUTH_SALT',        '{.rK>%,uQ`S,0;3ByXS<VI+}r-3,P8>Kz#*3^ 9kog<g|}#LNe-2hwh!{q`V=Cn1');
define('SECURE_AUTH_SALT', '|g@B2U-AMCG^L8dn@+4Zw=HBUTUrE9}V-R,d-769[4;TBl|+>m4$?rWLS/VL<+|`');
define('LOGGED_IN_SALT',   'i6:=KVVhgp+v5eFlo`!P[]z ;6mF{ev)MX{#RUk9:iPx,w/rEbkA I/NY)|_0+f&');
define('NONCE_SALT',       '<*$1<-3YAt}tW?ps *NWwmQ[E*f)HiG<o_Ne*T>{XM+HdY(tIyU+t?[>@{.)-}}o');
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
