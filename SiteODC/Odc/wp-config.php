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
define( 'DB_NAME', 'Odc' );

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
define( 'AUTH_KEY',         '6).LMof[STf94i0S.8K_F3kOZNO@jH6}L4&v`m(xi:L*6J2EJf72?I^DQ6;`qv I' );
define( 'SECURE_AUTH_KEY',  'sZ!u)bsVXU.Q2T|YE?.8Bdhd6!2M_gt F:2uD5(2*<).]R4mnk6z-hD(9}+RQf9k' );
define( 'LOGGED_IN_KEY',    '>CA+}V:]o-t?n3_{$H=<kOLq,S%pZIMli|J$cw$F#e}$RJo0@sYYk! XR@Z.ZRy$' );
define( 'NONCE_KEY',        '(K[3)NCS.dD}H>1VQcWv>tN2=LtbVDABwuzOk ARHEA=+Q5V`S#oEx- <%y[~vYO' );
define( 'AUTH_SALT',        'xLV[%%XP89%a(5rbp>eYRyc]yU~h*6}2jCETMg%jlv]K~3bO1xk7{^E@L>G~Jj)m' );
define( 'SECURE_AUTH_SALT', '%%Q#>8;+4oF?Lg 4A?7a|6Mg~F%S$.Tr_#ofKtlOQS2@[0TO:m#ZK[+PK5_p%BpF' );
define( 'LOGGED_IN_SALT',   'D!jo9)kt-}<HqD_M9],c4wC8?u#u7)9eaYL@%QVI$~Y7 A1go_|i0q?#&S1xdYh|' );
define( 'NONCE_SALT',       's1K+3lAf^4iRq#PTE{!JysN_2-;%yLdy[D^NB}!yH2]RN%Lzp1+7S}2]:L]0*@jp' );

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
