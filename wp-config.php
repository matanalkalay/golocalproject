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

/** Detect localhost */
function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
        return true;
}
define('IS_LOCALHOST', is_localhost());
// ** MySQL settings - You can get this info from your web host ** //

 /** Detect local]define('IS_LOCALHOST', is_localhost());
/** Detect localhost */

function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
    return true;
}


>>>>>>> 3188c9775c879442c4e28f8eb57358ac91ff1418
/** The name of the database for WordPress */
define('DB_NAME', 'golocal_go-local');

define('IS_LOCALHOST', is_localhost());

/** MySQL database username */
define('DB_USER', 'golocal_go-local');


/** MySQL database password */
define('DB_PASSWORD', '{]L4sL^PIHBX');


/** MySQL hostname */
define('DB_HOST', '80.179.226.46');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/** Site URL */


/** Site URL */
require_once(__DIR__ . "/wp-config_url.php");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/** Detect localhost */

/** Site URL */


define('AUTH_KEY',         'p1~%=!W{%8#Z7<P];S}:eRQZuK~Bn&wMT` u:o!un]cXx52cq`&([Nkg>[BLv~XU');

define('SECURE_AUTH_KEY',  'Y(6{Dz~b_@u^ib~$>RQ@ `xJNK&0c<;wk@x==nnDPq>-9|tQ[wF>;@.yd:4oU}]-');

define('LOGGED_IN_KEY',    '{:@<ic{qS_@uc)K]B8/7OR& Mj_x1KPiw)O7R=HL2KT}t%:$ SCHF`d|1%h.s0CR');

define('NONCE_KEY',        'vO34xuLZc=7F;1tRCX-&<<[7ItIa;.*Nkk,dVG+p:C1f_lB&ez6taVMd*50py`;H');

define('AUTH_SALT',        'XTK|uMOG{S]E/3/j@.58E}=tVW_:FJF:OqB<-ity:Fy67AI27vJbkR{9Ha8B(qQ5');

define('SECURE_AUTH_SALT', 'kZx obM`D6CkpztV}+Q,]4=`nzz%ms~GRY7Z0ZFIYZSg}x{E(66SiB|Ds!FAz|+=');

define('LOGGED_IN_SALT',   'Y7XbUS8!8H+k!;kYLyPitDgJ&oVT=v>{+-:TNy2v5hOGUvXH:aCM/Ky!OkVrr=dO');

define('NONCE_SALT',       'Mre.-1Tj)R>9t4+Xk]fNArD[<`>z!TCJMpY.4`I#g.I<uB-x9pry=9YvB%=E=RW:');


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
