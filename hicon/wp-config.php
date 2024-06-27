<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hicon_product');

/** MySQL database username */
define('DB_USER', 'hicon_dev');

/** MySQL database password */
define('DB_PASSWORD', 'A9ZPdxM7kMgIQg0@#!n');

/** MySQL hostname */
define('DB_HOST', '178.128.95.94');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W(MWzQd}Jot.!zH2:e2]]p{=]Sm7a_pzR$|+E(a&8p-tI!buJM8 45pOzxMm]6`<');
define('SECURE_AUTH_KEY',  '6MSdPac^X=olMF`{wa^66PV17[Z>>F6iaQJ~8(/D0Yf:q &vL dCf&N1R/HhnKak');
define('LOGGED_IN_KEY',    '654iF,8Fq`L2<R|Tjr#2@V Wfgh*S6#SnYhjEcE}Msv]4Z`&W}+(dbP:&82ei}E}');
define('NONCE_KEY',        'Px.b:b k.jV#kILr9~$>=]A+BEJM&ODBz!MHMgMAedTJ.x]d&xR>Iesf~Cp>fhAR');
define('AUTH_SALT',        'D4dX$zIRN(W|&$~!SbUYkK0!]C.?HMd+@sf-tlN9x2iDM_~=854obMKGc)f+zt&@');
define('SECURE_AUTH_SALT', 'F`zyqp6~*Y42+3kU>8|hdIRM&-rnG$]Sg.s[Lk/XQ#3xgU-+([~=:~8hLa>Gv?yG');
define('LOGGED_IN_SALT',   'kM_ f`X3,zTAZtjpiwk9q3aR{z1<B!C&vKp*s6>+kGtay1%~>t/ PN(v0T0x/I|g');
define('NONCE_SALT',       '+?zS{AH+#@04)&Q3XYMuld` YeF/;:xQ{q>C kPCBV%8KwP92G:-H/K2AB,iF+Rm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');