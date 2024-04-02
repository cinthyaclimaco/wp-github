<?php
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
define( 'DB_NAME', 'naye' );

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
define( 'AUTH_KEY',         'm>2aC-j>gGApqH(T+>DwGw}?M>YU|uE& KNF:)d>U]F2/Uy@_Ggygdv[)Pp?<p3t' );
define( 'SECURE_AUTH_KEY',  'vw,UgjB%Fp|]ZzX!4z#S<hRF:Zt1TPx6Nc@-qq#l7$!&8zt92R$]Sp%zXA;&`eg:' );
define( 'LOGGED_IN_KEY',    '~GlYDutZ9s=8#&JV{NownB7d]5+QATb}7Z:Wl7aMSS`fSPQ&2h=yyBHmX&Ggl%3h' );
define( 'NONCE_KEY',        't/.P4/h>p;zRl?</L0b~f9F_f8R-[jad;=Ys@t)Q={Yc1?QwR(924ghJtX/O[)@?' );
define( 'AUTH_SALT',        'G.tft6 (Qz(TFq ]DWAfa3qbo[#2[-VMqdv0mdm|{AyIUXJik*k!P$a}OfnNzhYM' );
define( 'SECURE_AUTH_SALT', 'Y*u?qoz:&T<^5897$)E.Kj]tT{Kn:BC#yT7juZ7|2uQ~/)V[fP1&;k4^Fw|kR}3,' );
define( 'LOGGED_IN_SALT',   'K1LR#y@wx[bshgdsXOp{JWSlTh[&uz1;]q<gtFku8c&VaOis+C~/%SF0i7|,,L*d' );
define( 'NONCE_SALT',       'Kr)css5<>xG,]c} kIducXabiX8EFOhZB!AtH|zs1r*2y8%jXW@Zm[76*D(2atgA' );

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
