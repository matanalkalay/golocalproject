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
define('DB_NAME', 'golocalwp');

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
define('AUTH_KEY',         'sUzf98@n(bt5m1T%U4E5^Es}e6cf!5O-{x5p~Iz)77jOWM &=Ofd]T[1WH%hTc@H');
define('SECURE_AUTH_KEY',  'ML7IX!s(q*M%ODi3>aMq^?z 7-9<wVgh Z2ktfP}GZNP ()8m_Dg x}Pu1eS;FsT');
define('LOGGED_IN_KEY',    'LxY7(hDDI2o)aj`4bTLsJ|cX|&<r@#+wbSzzXm?OsKXmTJ#{X 9R2dbxr;3963as');
define('NONCE_KEY',        'dq^1|alw+l_ifx*oD{MCk5^HQgW_-L})T8&9et7B NKAo(B*SM$KL.q8j4n!i(lg');
define('AUTH_SALT',        'bi!P`.)EHI=[J>QVRp0wATf,KN&a#.^a;;s:9N ?(F#_ fARA=m>%@l1(TSUusAu');
define('SECURE_AUTH_SALT', '5&hj##}0}13I07LSWoSy{Rm@;]2va iT6a!X.YoxwHB5Q|=V&jM*(0EF0 nzPv^1');
define('LOGGED_IN_SALT',   ' 56:bg() N^Z-u!D kUK_yTzrjk&ui81?Bmv|<.?+|tir6H!jY 8uA~3wo|%Sa>|');
define('NONCE_SALT',       ':KL*!-hs1-X~F p/W)#7?eBm&%vd8v5hTWX<<>3UPB[N]%#SaN_ j},KA0IZ*(dj');

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
