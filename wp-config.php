<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b7]r&Z6jAD69k*fZZd=9p65zgDz>3>sS~*BZDI6BOt[86N$kruSKer1#2gWozFGn' );
define( 'SECURE_AUTH_KEY',  'OZa<O-~}-mRWg3ss>p#a$N$5g&9eWoiqkFy^Z<hf&)dn^Ny$xVzG6qY#sha0J+TH' );
define( 'LOGGED_IN_KEY',    '` #g1%<(FS#CI5!cf5vz]1k@=bU(Uhq!G5jrL)<R++Ka,cIx%T0+!c#<&<zSN5|`' );
define( 'NONCE_KEY',        '59O,^RT<,hv=s%`B9P&&$o^^iCjJ|GjpzzP2qQdcgU1;!CK5vBi=bxc*(s,FP&?0' );
define( 'AUTH_SALT',        '%?UlApF|s >!_!a{Sr.H4)SmPeF?fo JRUiPXH=V6v%l4JRl&K{0gDvXa}9U7_j[' );
define( 'SECURE_AUTH_SALT', '[JZ93?GEKTpzIkvb7_@rD4 N=!sn}k^>6(9v=>3eT+|kiFq@-i2>gy]+4^fgFg4M' );
define( 'LOGGED_IN_SALT',   'SQ2X3PI6&=Xh%$C:gv<MB_ydE95)8vp&qpwUh;*`:A>m@{L{Y>db,w4AXx7!1_}$' );
define( 'NONCE_SALT',       '5w c2MOjts)y]{I0U=dGX+K}9$.hmFus[N78b!PRAczHe+R+TDz[pyfC,8$>7mE5' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
