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
define( 'DB_NAME', 'lab-YarianaU' );

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
define( 'AUTH_KEY',         '/pR.9.4;)6.Euw{e0i_u-k$Nb>I#7F;Gz$KUS @zMc<q,s:h1YFd<BU+G8%I;?Oc' );
define( 'SECURE_AUTH_KEY',  'q>O%1<hj!Pvi@GYfxwppNV;L>|>k<#*+=]S ;5q}vkgzK38@Sog-pTMmv{|hP~,K' );
define( 'LOGGED_IN_KEY',    'i.O2zGz-%*NbWW~],M5ap:LCb?*#=1g(/~La4[?w_]zA9]n:;xvMrStKYB-2%&7Z' );
define( 'NONCE_KEY',        'gVq|C<}HWX$zm&QKwF9>Lv-x#G*P6 0[Hk89_@h.n0#%OrZ!,wI3yn g3>`ItqT>' );
define( 'AUTH_SALT',        'mMMlIU(W=0gEWEY,<MP~!,i*lc]#4)@O:W5?5c3ZO0z6n[Ci/E+U_.-b<y)G6FT4' );
define( 'SECURE_AUTH_SALT', 'cX_{|BA:d9rP>B@tT|zgvKjxF7:3})RgEPNOJI>F?A/Z=HFjaMuy!jK?M+uV~bX)' );
define( 'LOGGED_IN_SALT',   '`oGPa`~o^Az49Xp1yU7t*Vy#]^*oq=S#0Z.f6FGLr{w}8V[kNn[K4h`.:n5BwlwU' );
define( 'NONCE_SALT',       'PNXAbH}=f(2^Gif>!Pj658z&H(P)st$|vW 8?m)Bcab1_.{0U#R1Tmnu%af^/|}M' );

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
