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
define( 'DB_NAME', 'neuron' );

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
define( 'AUTH_KEY',         'cMNLP0qX,j~Dq?f+;*pc}w>6}KoEUn*!fKsRsi0w}UA/1ib?yXEL]Ja?X=4Dn&3_' );
define( 'SECURE_AUTH_KEY',  'Ifpwt.M;+U^sV&Z*vo`cG%F=`npuPM#_oj*Xr7kTOIm_(Z<RtA69sXp:G~`pZDUU' );
define( 'LOGGED_IN_KEY',    'W.5OSa1&Y]X#%Y2bSWwX+B!aVg1qE4Bgbu4bv]9le!#!PeAdQ~~2:1LBCJcy-107' );
define( 'NONCE_KEY',        'x~b!ug,/jo7gLXW7W-~4<l*B#,zjSd^9>l@.0q#2wbcJ)*02_)|<EISD%B7rh-Dl' );
define( 'AUTH_SALT',        'Hjx~xZ2|$9:!EJ^C,6)g6vJHE#B 0hgSU(.tL4X/biy7ovH|^5nhVSl8_BVi*i!p' );
define( 'SECURE_AUTH_SALT', '446Po32Aq59.^}{E9,?Me4F9E{~>oZ~E_3hV{)%K6z{c!Be@S.TfF[SjCZHE2s3L' );
define( 'LOGGED_IN_SALT',   't6c=[AHXYXA!{[Z]}[g0;*EHE_g3l_qn] RCiN?9UnM:ku:}3JlOp@*:3%&Z~U=6' );
define( 'NONCE_SALT',       'n=fad[0dRT~`]ehfpYWFwt)3K;iYSd35&]lMW*`>6_sACG]=ybNwm&$nPA:x2g1l' );

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
