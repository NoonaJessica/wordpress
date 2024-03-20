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
define( 'DB_NAME', 'nooname' );

/** Database username */
define( 'DB_USER', 'nooname' );

/** Database password */
define( 'DB_PASSWORD', 'Tieto2' );

/** Database hostname */
define( 'DB_HOST', 'mysql.metropolia.fi' );

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
define( 'AUTH_KEY',         '*8p!k:V.+$X[d!sfMc<Zk:{V~1INF%2IQjP?tvYK=E!^K U7B9h,v<C{=+CdK7pE' );
define( 'SECURE_AUTH_KEY',  'jlQE<Uf]drtICxKI6=AS=&!U@Ou+ooyFiG1`49DwD5tQ2LHn{8m_ +6)dT+v`KO(' );
define( 'LOGGED_IN_KEY',    'H_@XA9H8N~!LGirx1r=.+M5O)zXsRdHz 39Z4R)gI]hx;E4giP}$hx_;?f9qpNla' );
define( 'NONCE_KEY',        '$Fv_iCJIiY~G}6f29ulNE]$1=qA!P{h_1&o`b^?/$Xa/Ri_fyd@C(tN/(CYcabjz' );
define( 'AUTH_SALT',        ')N]5{Gv]/?<q:#;9^gyHMofRd)Iwba#eb! _lC/ZOa0&)NIIeXNj*kNz08cG>S^4' );
define( 'SECURE_AUTH_SALT', '|os)v0tf:L~0n&DC_ad07+lVwz8!j4a=Zc0c<<6T,mZt&%C71B09>ju5xvCVv3^2' );
define( 'LOGGED_IN_SALT',   '~]78Hyvu~w>v~^tZ+n}^}CVNJnMdLkq5#O=AU.)3+eaQX=<BW{51_Z}b]`3k!G5~' );
define( 'NONCE_SALT',       '|a/l}hl|Lg{RplV2LU_&9_(X<U8 ZDSx mM&6JLt[=]9>V*%zssJxpq=%V_b%E]E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
