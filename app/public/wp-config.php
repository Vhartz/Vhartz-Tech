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
define( 'AUTH_KEY',          'b=<.&,AZX[p]*3ry^h@RXg(GC!5a/5:m~6d m_kp0}g#)SdI@L]R0x,oMxn{X@6{' );
define( 'SECURE_AUTH_KEY',   'IyBKiP_ TtOOIFvV7V`r+!JHIlBHe-(S|[l;{8IUM,LWJcs->!DN4ZXDNe{9grHI' );
define( 'LOGGED_IN_KEY',     'sOtT^k1/OGAIhR@q8;2<P(^{B:kWQQIhqg@^4Jj`F?g,j}K573cfsG ]g!4Rf}id' );
define( 'NONCE_KEY',         '^d^.6V}WnNv?tcSo{C7_c,q!%}w5~m@U]?*O%1:1g6feZ_I:#%@O,c hL4Mq23$d' );
define( 'AUTH_SALT',         '2Qr`)&5y&YKT!Sm0hXgo~b:av#e^ Z^kyGK`kpsY83NyZqS?_$BB[p8i;kOhy|?_' );
define( 'SECURE_AUTH_SALT',  'YQzA.Yzoe1iOPvl2<=#LSc&u5k$nM~D(qHR37Q2u6&U#!PI+6!m/(#b`*iXBF4N}' );
define( 'LOGGED_IN_SALT',    'ts.DX}]04%}?vejK^<?L%{(,f.8sQ>RYwh>C+jmD8xA]@SNl*[S@ Zc S)cH~)Za' );
define( 'NONCE_SALT',        'V8RAaz /QPY.0@Tq]g,EZaw<>++%kF8);|W;C/T0kp8fq):!pF P0in9/x$=x$Qe' );
define( 'WP_CACHE_KEY_SALT', '8(p9z1=P{jdBvsigm|K9)z+9 |dX*%GodsG~X3X5Gt;,sTSC>[+-%rgqSj| X6M6' );


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
