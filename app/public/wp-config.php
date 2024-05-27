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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'o$gZ~ddH`k+gvE@0|16sBF`) )V?9GWX|Tm(F&=J5fA/$ZY#IJDU[91/b!qVa!}x' );
define( 'SECURE_AUTH_KEY',   'V]p&HmZ%f6e~5BquZSaQ/jZm5fY7<16!tvAy:jxY_soq?uCEBJGY;u,TtpSuUQ^;' );
define( 'LOGGED_IN_KEY',     '-+OR&SD${^2+pOP<RA?`8(tx^H]Y]QVE@l @uc+l.UXtpA-#iNUgU=.8.I35KR]V' );
define( 'NONCE_KEY',         ')_ .fJgJu9a5.r2;4 d8zaPo=FY+57u9tg>`JvRRLRw!{i#*e_QflBW1Ud??< *O' );
define( 'AUTH_SALT',         '<EjN6Q[Zf|Ez$ZH{Eg|?:Q:+`XYsGZ`[aK`3:f!Ii7ErXmI]f}_qpCu}oo,aeqm^' );
define( 'SECURE_AUTH_SALT',  'o[idm|2:.9o;x4v{*d_{`l$wr1U0,=P:d*Iswv3#]vMU?uY{,x*p=:xE7k)UMik(' );
define( 'LOGGED_IN_SALT',    'GF|[sJ>iW-x>|7(Hp@5<?gb_}R+- :/pE7?W#Y)Dqnh8dK{Ak@Z.Rdkqn<K{;ik$' );
define( 'NONCE_SALT',        'iK!:p IShEYA!?-,WcLqO|<IcPf|~6ksn;0:/;{@+XHhlo5OTA4TW3n;quu7h;.U' );
define( 'WP_CACHE_KEY_SALT', '{aKN.2HdeeVXq%|?p Th}RgCvT)4x4:B]roA5}~kB/l+[^{l@I1DRhG s-wLGh}s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
