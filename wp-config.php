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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'alan' );

/** Database password */
define( 'DB_PASSWORD', 'Sweetwish@1996' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'H[gszU~+9wx&VI%tL%;4l>Tq8V3xiXA6?7(:{-!DkiKC`F9%BW|lI;Ul+rG$POMa');
define('SECURE_AUTH_KEY',  'u7HAjIYT<RkU4>[&S+9:`|]v}l9:6@>1YBt},EugqzQ^`:!+9i@~+9@rX*7r7v}v');
define('LOGGED_IN_KEY',    '6iuRyFE?CvF-Va 4@IVCt=6EmoikDB.NmLW[|CcnS-?9.;<+MuBfCX(ka/!Oh?+o');
define('NONCE_KEY',        '<6eF*|7;z7zqG7fBYo{[6S11M=$``=nz(GS3e%(-rc+mUm%K@$qrX(5y.C)YA;k-');
define('AUTH_SALT',        '[Tqw0!(BY5QM2*xPE/!QaEKr9[0oj0Zj?t. h&{YyyR+.K8b_y+4|+gL@]vEvWaL');
define('SECURE_AUTH_SALT', 'Vj<~hxel?iD8MR`w-vV$:4ls+~>l3ZQ02eea$r4`1#b#|<n_wW`T-Rg;Fma]g7CV');
define('LOGGED_IN_SALT',   'os)(V1}yc,_Vk}N4d#,V >FkBJBM*+?KL3;9+pIB}1f3 <Ko`vMj`O?y9T/Ze{tX');
define('NONCE_SALT',       'mtG#Mlr=0x*y%|3D|6.x%/e:J#6V1Lp(w]SdDk.@T&Tl[4,BwxT$WzOnVGJBd-Ui');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
