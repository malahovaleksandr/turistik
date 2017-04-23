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
define('DB_NAME', 'turistik');

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
define('AUTH_KEY',         'Kadh|SdsMg0xOV>N1new]7zq]8v{^3hmYE$/>8r&tK]_-l)0N|F zt=l[Zil#^`U');
define('SECURE_AUTH_KEY',  ';I{x#q2f`FKuK~f&b.MCrLZcoC{3m{nfG_yNTH6_$}hASBk@1}S(3Ji$x_KR6)a)');
define('LOGGED_IN_KEY',    '/{}XoIp|-id`Vw4P^,4zSD?2_Anw6;E]p]lL5+odOzo]r2^IJ^b_x19si+&wG0?Q');
define('NONCE_KEY',        'Ob|C]& Ota]$A4?u5Ie[T*!6OqFpng=fq&Bk&3JOO{?od,bX&NH/(l.>pMBPpoUO');
define('AUTH_SALT',        'qRygEn@%hy{^GU;nkNUe,Kp$A;DL[Hzdo?T@d/?3Ul%-AF#5BMA#11*N>@sI:d~>');
define('SECURE_AUTH_SALT', ';3aw$iJr!vc`k>cZIg{Q_PnWcu3FcI{w]M)mI(F5:COe&vl:{(1e.)R!Wj@DY+|_');
define('LOGGED_IN_SALT',   '1JVZM$qaM(EahnG+dIv%yk#F))9wx-jqSSB_5 jrZ1vbN|Hv]`rk_dSY`ROT4z/V');
define('NONCE_SALT',       'PD~ME<?B_)LObL}ZNp-&Dfa6;aLm/9peOzn*xS?Tmbt+I>F[Evzp:~*?|TO3Q2I=');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
