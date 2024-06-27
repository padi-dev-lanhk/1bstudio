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
define('DB_NAME', 'hicon_me');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3j#4DzKGPBwCE|Y1s1<gud)#e.%3({j1#x(&H.J1k+o) ]C*fjc!7TyHlWCRg`A=');
define('SECURE_AUTH_KEY',  '?FxKHthLMxV,hA4{jyK1hK_`sTLpJ@DHS{@^}&)BB2ed-|b**H1 kj7ijuqp8*>;');
define('LOGGED_IN_KEY',    'IJ *eJcJ0Q?sJ0YPxm}8FIdmBlF6GB^X#Bf52@~A1IxW[~YMuJYz|dL;op]3VxS3');
define('NONCE_KEY',        '^sU)-~(ubn%pyQs=;=$#*Ja^~8}27$+5NZ.U!GD6{,<|^SnJ4<><rcX36_nM}WK|');
define('AUTH_SALT',        'haYYPaBb)=~{?ma|VHuo8+OehSE$C02i/(p|kp>K *:uH^fq5L#Z5_V?R$ - 1kp');
define('SECURE_AUTH_SALT', 'mo[]Zat?JnvqIM:sW}t/y{}VDh2vjpkll<kLG%c:0^*`Gx:BQ<K>*yQ=PJim^Blp');
define('LOGGED_IN_SALT',   ' IuND>@eN<(QB$*CSyd8}LKy0;Qm|-a{{Ae-YI~Aal9sJ2*<D#j. [jy iy3);<4');
define('NONCE_SALT',       'zVZ XEq{P5,>2KYmd`q|nq7}t#aQF{C_v}w$?7wU*VKx!OY]tOv5[JI.p)%B+?&I');

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
define('WP_DEBUG', false);
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
