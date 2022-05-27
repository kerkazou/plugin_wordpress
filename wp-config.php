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
define( 'DB_NAME', 'plugin_wordpress' );

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
define( 'AUTH_KEY',         '8/WTaUTS=.O&SLHNs<@DKM~]Z-6O>B=nh,,yNj5A%[m9*9K.a-?Ne{St3Us0WZ!5' );
define( 'SECURE_AUTH_KEY',  '{Z%(;r4/h-E6)}[7.)<bC}W=#7&*9oqZC&-Fq~MX$rqub2aSLXF5#Xz5.+B=kA*s' );
define( 'LOGGED_IN_KEY',    '!e8`WsOWAa;mXF];vop=Id][leM,HmSbKwum!j>k;+wb.JG$cR.-NvbmR{OiJfQK' );
define( 'NONCE_KEY',        'Ay:vUPw1d~mk$b[hQ%*So/b<nh~pry/Z:|yjlA!zE$pIZ%ZfW]^O2@>:;u]CxdD;' );
define( 'AUTH_SALT',        '^h5u.G[#YM:Sp/} wHwAG 7$?X<tB9kPMQ$BvWw^WpjLuB|NvM#~nb|>y*yP^E$b' );
define( 'SECURE_AUTH_SALT', 'K)P/-( =J%@`:{m,OoHg#i>bI]k;=`^v6_<G.U36.cD$w-f%|XRw%*Bq$04,)w|^' );
define( 'LOGGED_IN_SALT',   '{>@f||Iu{vj^-onv^egN423st#LfdQ5,k#_! w#3.WbN*o:-5c3{h/4x>UHg$T}w' );
define( 'NONCE_SALT',       'ZcCX6?nTf9dE9hJ`-LwD]y<y=;0)H!87|*`wdL8NT6VK[+O. Dlr-uSsSBn&DHAf' );

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
