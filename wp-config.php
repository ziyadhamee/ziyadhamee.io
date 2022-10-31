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
define( 'DB_NAME', 'job' );

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
define( 'AUTH_KEY',         '=xG,*7c|~<vsh[g:J(Bp&4~l?4Nw4XVLs0JWG,f.l@zkD/NA)V^h>r+)o@;]{X0e' );
define( 'SECURE_AUTH_KEY',  '/]SN.H6E(UYTf`*V wH!-Ui,Mj#?Htg%r;B&ZoZ4CH)SRO?i/5&ARi/n{j7Xur`-' );
define( 'LOGGED_IN_KEY',    'Y7A0?#S4?o5VDpFPZU%~IJ.)~3gPN[tT/SHoH+NZ<jSvMxN.~0n#+d{lIx,Xkn8O' );
define( 'NONCE_KEY',        'gJ]Eo<dMt;bF[lu%FX+Kew39c,$`$2xH8c,Yuqr:.D{G8@sa@1hm;/K5]*O)`*m|' );
define( 'AUTH_SALT',        'V0cie; y)/.>DuCG%yd%LYw&[7+q?B+#xD.n{Hs[<bxXrw*u-?`5N2xO:;EColn{' );
define( 'SECURE_AUTH_SALT', 'NeZA6:@V.]VuDjaujoqwn56i/tK. 8]D:7Wk`qrD&7H1#`K.~IhFym/{yld>w5ti' );
define( 'LOGGED_IN_SALT',   'OnV`|+H|os=|1CF:0&Tn[>CJ v)[,2 fKw=d(`^b&HB}4me!86j?~:{}`NoY0KE/' );
define( 'NONCE_SALT',       'gj-Tz$RN,2K3L;Xk%AV^?JrN+P8;e^;MeSE2 l0eC(f,Zi:GtvRw#N,fj~m<&z4v' );

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
