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
define( 'DB_NAME', '1bstudios' );

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
define( 'AUTH_KEY',         '.T&=[Dp.5ijV[A+iv>%7R&^WR)e^yglPiMy5T2,CDy9P*rRY6[~=xz)onhV/hJnd' );
define( 'SECURE_AUTH_KEY',  'R$Jt4/?,?`AO70q84KSj@P_O&B))^VjzM=CuP55fnHG/M?1!Q7U)~BMFk}wQfn#O' );
define( 'LOGGED_IN_KEY',    'Gt]XCHv(K+C|N)`n9L_!5$IWdu%YSKn}=E$?osO_zD+3oewef@RgJ>%|,7[WBhD;' );
define( 'NONCE_KEY',        '4bk#eaaO|rbk8x}x&rUS3];$)@R%sIR?I=+E46h$>Tli8#8xjFr;#$nYPf#CUbT^' );
define( 'AUTH_SALT',        '4c/A7KR2%}hJ!1~4nK}]|i1#y^rDx]/Ev9gLE}I,93rccFJv#&^:=S~9ZuGd?~{S' );
define( 'SECURE_AUTH_SALT', '/Pjyr?aiYcSs5Gv.eI%B XlxZb%h<>bc1cF91z,JYL:nf>Ou-JH~.JC)D$ifFU:t' );
define( 'LOGGED_IN_SALT',   'Z9;Ww>i?6TQJ2h4@ykr_OGEm-X67}0{LAg/onA+3{|QwQ (M+[`h|!+e[,>^otGw' );
define( 'NONCE_SALT',       '0nH6ZMOrtsW;gnd?;LIYnQ{4tW`s80I.RXv8zqPF0GP]k5`d;rA%sNG.H5=)[|V ' );

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
