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
define( 'AUTH_KEY',          'YVXEZN#<HBQ2|D@Q`Rk&AE?1bJn2T+;3`0Lchv0;#=ve[8fH< 96/phtR!=0~/jx' );
define( 'SECURE_AUTH_KEY',   'OJiv?UX(>EaKOy1c TG21-cwgF1:yB*`1LRH0]&C1[]B~$ bD&,P;`_WdD-(z%v|' );
define( 'LOGGED_IN_KEY',     'in`M3kH.2<$jKv:51(b-ywG7Oi>81DEJ$]U(0c(T%f>?7bux(IvHd:40pX<P~)S*' );
define( 'NONCE_KEY',         'y|Llx!TDBZ(4+dAO=`ax$rYj;>D&WcyzM>l*)?[,cs3sLH@G`z}f0,<Yi0B|t:{7' );
define( 'AUTH_SALT',         'm~)i$4Up|<]?=/7_G<d?On0,o7HoG{S>b:%l-1R-*W1+Hw$4HU-ceE$AsT_U^>4y' );
define( 'SECURE_AUTH_SALT',  'z[&J$2lU|1[fnGf&aj7Gp7lD&oKr4O5sWx@g/Q;au$v={rm{K;MbJxz%|pF|<:Di' );
define( 'LOGGED_IN_SALT',    'c$SP5o2#:c3>TZF3e=5NugZ:Mw8YiTqRW(:~o:;xB; 9Y:tZ1]1y<)E-y`Qj-UJ3' );
define( 'NONCE_SALT',        '[&i6.<Gf>z/e<L>lbdl&4`tbISpS2J]L-}xW!ekS <}NgS/FryeK{[m.@z=ti.5J' );
define( 'WP_CACHE_KEY_SALT', ':3y4PO<%Uy/=$PM>w]bN5om,w=Y9U0@#)`8ujljg4Qd)u;5IsH&U{TdDbMmux(BA' );


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
